<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('ModelLogin', 'dbObject'); //dbObject itu nama lain ModelLogin
    }
	public function index() //untuk cek session apakah masih berlaku atau sudah destroyed
	{
		if($this->session->namaa!=''||$this->session->namaa!=null &&  $this->session->web=='bkd'){
			if($this->session->level == 10 || $this->session->level == 9){
				redirect('Admin/index');
			}else if($this->session->level == 11){
				redirect('Dosen/index');
			}else if($this->session->level == 12){
				redirect('Asesor/index');
			}
		}
		$this->load->view('welcome_message');
		$this->session->sess_destroy();
	}

	public function login(){
		$username = $this->input->post('nip');
		$password = $this->input->post('password');
		$pegawai ="";
		// var_dump($this->dbObject->cek_user('nip', $username,$password,'users'));die;
		if($this->dbObject->cek_user('nip', $username,$password,'admin_fak')){
			$pegawai = $this->dbObject->login('nip', $username,$password,'admin_fak');
			$dataSes = array(
				'id' => $pegawai[0]->id,
				'namaa' => $pegawai[0]->nama,
				'nip' => $pegawai[0]->nip,
				'level' => $pegawai[0]->level,
				'fakultas' => $pegawai[0]->fakultas,
				'web' => $pegawai[0]->web,
			); 
			if($pegawai[0]->level == 9 ){
				$this->session->set_userdata($dataSes);
				redirect('Admin/index');
			}else{
				redirect('Welcome/index');
			}
		}else if($this->dbObject->cek_user('nip', $username,$password,'users')){
			$pegawai = $this->dbObject->login('nip', $username,$password,'users');
			$dataSes = array(
				'id' => $pegawai[0]->id,
				'namaa' => $pegawai[0]->nama,
				'nip' => $pegawai[0]->nip,
				'level' => $pegawai[0]->level,
				'web' => $pegawai[0]->web,
			); 
			if($pegawai[0]->level == 10 || $pegawai[0]->level == 9 ){
				$this->session->set_userdata($dataSes);
				redirect('Admin/index');
			}else{
				redirect('Welcome/index');
			}
		}else if($this->dbObject->cek_user('nip', $username,$password,'dosen')){
			$dosen = $this->dbObject->login('nip', $username,$password,'dosen');
			// var_dump($pegawai);die;
			$dataSes = array(
				'id' => $dosen[0]->id,
				'namaa' => $dosen[0]->nama,
				'foto' => $dosen[0]->foto_dosen,
				'nip' => $dosen[0]->nip,
				'level' => $dosen[0]->level,
				'web' => $dosen[0]->web,
			);
			if($dosen[0]->level == 11){
				$this->session->set_userdata($dataSes);
				redirect('Dosen/index');
			}else{
				redirect('Welcome/index');
			}
		}else if($this->dbObject->cek_user('username', $username,$password,'dosen')){
			$dosen = $this->dbObject->login('username', $username,$password,'dosen');
			// var_dump($pegawai);die;
			$dataSes = array(
				'id' => $dosen[0]->id,
				'namaa' => $dosen[0]->nama,
				'nip' => $dosen[0]->nip,
				'level' => $dosen[0]->level,
				'web' => $dosen[0]->web,
			);
			if($dosen[0]->level == 11){
				$this->session->set_userdata($dataSes);
				redirect('Dosen/index');
			}else{
				redirect('Welcome/index');
			}
		}else if($this->dbObject->cek_user('nip', $username,$password,'asessor')){
			$asesor = $this->dbObject->login('nip', $username,$password,'asessor');
			// var_dump($pegawai);die;
			$dataSes = array(
				'id' => $asesor[0]->id,
				'namaa' => $asesor[0]->nama,
				'nip' => $asesor[0]->nip,
				'level' => $asesor[0]->level,
				'web' => $asesor[0]->web,
			);
			if($asesor[0]->level == 12 ){
				$this->session->set_userdata($dataSes);
				redirect('Asesor/index');
			}else{
				redirect('Welcome/index');
			}
		}else{
			$this->session->set_userdata('login', 'error');
			redirect('/welcome');
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
