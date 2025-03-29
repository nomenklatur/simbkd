<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAdmin', 'dbObject');
        $this->load->helper(array('form'));
        $this->load->helper(array('url','download'));	
        if($this->session->web != "bkd" || $this->session->namaa == null || $this->session->namaa == "" ||  $this->session->level != 10 && $this->session->level != 9 ){
            redirect('Welcome/logout');
        }
    }

    public function index(){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Dashboard'
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/index');
        $this->load->view('layout/footer');
        
    }

    public function admin($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Manajemen Admin',
            'admin'=> $this->dbObject->get_general('users')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/admin',$data);
        $this->load->view('layout/footer');
        if($param=="do_create"){
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $pass = $this->input->post('pass');
            $data = array(
                'nip' => $nip,
                'nama'=> $nama,
                'password'=> md5($pass),
                'pass_asli'=>$pass,
            );
            if($this->dbObject->create_general('users',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                redirect('Admin/admin');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                redirect('Admin/admin');
            }
        }
    }
    public function adminFak($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Manajemen Admin Fakultas',
            'admin'=> $this->dbObject->get_general('admin_fak'),
            'fakultas'=> $this->dbObject->get_general('fakultas')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/adminFak',$data);
        $this->load->view('layout/footer');
        if($param=="do_create"){
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $pass = $this->input->post('pass');
            $fakultas = $this->input->post('fakultas');
            $data = array(
                'nip' => $nip,
                'nama'=> $nama,
                'password'=> md5($pass),
                'pass_asli'=>$pass,
                'fakultas'=> $fakultas
            );
            if($this->dbObject->create_general('admin_fak',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                redirect('Admin/adminFak');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                redirect('Admin/adminFak');
            }
        }
    }

    public function pilihTahun(){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Pilih Tahun Akademik',
            'tahun'=>$this->dbObject->get_general_order2('tahun')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/tahunAkademik',$data);
        $this->load->view('layout/footer');
    }

    public function editAdmin($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Admin',
            'admin'=>$this->dbObject->get_by_id_general('users', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editAdmin',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $jenis_admin = $this->input->post('jenis_admin');
            $data = array(
                'nip' => $nip,
                'nama'=> $nama,
                'level' => $jenis_admin
            );
            if($this->dbObject->update_general('users','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/admin');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/admin');
            }
        }
    }

    public function editAdminFak($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Admin',
            'admin'=>$this->dbObject->get_by_id_general('admin_fak', 'id', $id),
            'fakultas'=> $this->dbObject->get_general('fakultas')

        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editAdminFak',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $fakultas = $this->input->post('fakultas');
            $data = array(
                'nip' => $nip,
                'nama'=> $nama,
                'fakultas' => $fakultas
            );
            if($this->dbObject->update_general('admin_fak','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/adminFak');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/adminFak');
            }
        }
    }

    public function bkdDosen($tahun){
        $nip = $this->session->nip;
        // $id = $this->session->id;
        $sk = $this->dbObject->get_by_id_general('sk', 'masa_sk', $tahun);
        $data = array();
        // if(count($sk)>0){
        //     $k1= $sk;
        // }else{
        //     $k1= array();
        // }
        // $sk1 = $this->dbObject->get_by_id_general('sk', 'asesor2', $id);
        // if(count($sk1)>0){
        //     $k2= $sk1;
        // }else{
        //     $k2= array();
        // }
        $data = array(
            'nip' => $nip,
            'judul'=> 'BKD Dosen',
            'tahun'=>$this->dbObject->get_general_order2('tahun'),
            'dosen' => $this->dbObject->get_general('dosen'),
            'asesor' =>$sk,
            'tahun' => $tahun
            // 'asesor2' =>array()
        );
        $this->load->view('layout/header',$data);
        $this->load->view('admin/bkdDosen');
        $this->load->view('layout/footer');
    }
    public function hapus($id){
        if($this->dbObject->delete_general('users','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/admin');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/admin');
        }
    }

    public function bkd($id,$tahun="", $param=""){
        $nip = $this->session->nip;
        $tahun = $tahun;
        // $kes = $this->dbObject->get_by_id_general2('kesimpulan_ases1','id_dosen', $id,'masa_pelaksanaan', $tahun, 'id_asesor', $this->session->id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'BKD',
            'id' =>$id,
            'tahunS' => $tahun,
            'dosen' => $this->dbObject->get_by_id_general('dosen', 'id', $id),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            // 'kesimpulan' => count($kes)
        );
        if($this->session->active1!=""||$this->session->active1!=null ||$this->session->active2!=""||$this->session->active2!=null ||$this->session->active3!=""||$this->session->active3!=null ||$this->session->active4!=""||$this->session->active4!=null|| $this->session->active6!=""||$this->session->active6!=null){
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
        }else{
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
        }
        $this->load->view('layout/header', $data);
        $this->load->view('admin/bkd',$data); 
        $this->load->view('layout/footer');

    }

    public function ubahPassAdmin($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Ubah Password Admin',
            'admin'=>$this->dbObject->get_by_id_general('users', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/ubahPassword.php',$data);
        $this->load->view('layout/footer');

        if($param=="do_update"){
            $pass = $this->input->post('pass');
            $pass1 = $this->input->post('pass1');
            if($pass == $pass1){
                $data = array(
                        'password' => md5($pass),
                        'pass_asli'=> $pass,
                );
                if($this->dbObject->update_general('users', 'id', $id, $data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Password Berhasil diubah!');
                    redirect('Admin/ubahPassAdmin/'.$id);
                }
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Password Tidak Berhasil diubah. Coba Lagi!');
                redirect('Admin/ubahPassAdmin/'.$id);
            }
        }
    }

    public function ubahPassAdminFak($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Ubah Password Admin Fakultas',
            'admin'=>$this->dbObject->get_by_id_general('admin_fak', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/ubahPasswordFak.php',$data);
        $this->load->view('layout/footer');

        if($param=="do_update"){
            $pass = $this->input->post('pass');
            $pass1 = $this->input->post('pass1');
            if($pass == $pass1){
                $data = array(
                        'password' => md5($pass),
                        'pass_asli'=> $pass,
                );
                if($this->dbObject->update_general('admin_fak', 'id', $id, $data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Password Berhasil diubah!');
                    redirect('Admin/ubahPassAdminFak/'.$id);
                }
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Password Tidak Berhasil diubah. Coba Lagi!');
                redirect('Admin/ubahPassAdminFak/'.$id);
            }
        }
    }
    public function asessor($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Manajemen Asessor',
            'asessor'=> $this->dbObject->get_general('asessor')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/asessor',$data);
        $this->load->view('layout/footer');
        if($param=="do_create"){
            $nip = $this->input->post('nip');
            $nira = $this->input->post('nira');
            $nama = $this->input->post('nama');
            $pass = $this->input->post('pass');
            $email = $this->input->post('email');
            $nowa = $this->input->post('nowa');

            $data = array(
                'nip' => $nip,
                'nira' => $nira,
                'nama'=> $nama,
                'email' => $email,
                'no_whatsapp'=> $nowa,
                'password'=> md5($pass),
                'pass_asli'=>$pass,
                'level' => '2'
            );
            if($this->dbObject->create_general('asessor',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                redirect('Admin/asessor');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                redirect('Admin/asessor');
            }
        }
    }
    public function editAsessor($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Asessor',
            'asessor'=>$this->dbObject->get_by_id_general('asessor', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editAsessor',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $nip = $this->input->post('nip');
            $nira = $this->input->post('nira');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $nowa = $this->input->post('nowa');
            $data = array(
                'nip' => $nip,
                'nira' => $nira,
                'nama'=> $nama,
                'email' => $email,
                'no_whatsapp'=> $nowa,
            );
            if($this->dbObject->update_general('asessor','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/asessor');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/asessor');
            }
        }
    }
    public function hapusAsessor($id){
        if($this->dbObject->delete_general('asessor','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/asessor');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/asessor');
        }
    }

    public function hapusAdminFak($id){
        if($this->dbObject->delete_general('admin_fak','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/adminFak');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/adminFak');
        }
    }

    public function kesimpulan($id, $tahun=""){
        $nip = $this->session->nip;
        $tahun1 = $this->dbObject->get_by_id_general('tahun', 'id', $tahun);
        // var_dump($tahun1);die;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Kesimpulan',
            'tahun'=>$tahun1,
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'kesimpulan' =>$this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id, 'masa_pelaksanaan', $tahun),
            'kesimpulan1'=> $this->dbObject->get_by_id_general1('kesimpulan_ases1','id_dosen', $id, 'masa_pelaksanaan', $tahun),
            'kesimpulan2'=> $this->dbObject->get_by_id_general1('kesimpulan_ases2','id_dosen', $id, 'masa_pelaksanaan', $tahun),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/kesimpulan',$data);
        $this->load->view('layout/footer');
    }

    public function dosenLulus($tahun) {
        $nip = $this->session->nip;
        $kesimpulanAsessor1 = $this->dbObject->get_by_id_general('kesimpulan_ases1', 'masa_pelaksanaan', $tahun);
        $kesimpulanAsessor2 = $this->dbObject->get_by_id_general('kesimpulan_ases2', 'masa_pelaksanaan', $tahun);
        $dosen = $this->dbObject->get_general('dosen');
        $data = array();
        $data = array(
            'nip' => $nip,
            'judul'=> 'Daftar Dosen Lulus',
            'dosen' => $dosen,
            'tahun' => $tahun,
            'kesimpulanAsessor1' => $kesimpulanAsessor1,
            'kesimpulanAsessor2' => $kesimpulanAsessor2
        );
        $this->load->view('layout/header',$data);
        $this->load->view('admin/dosenLulus');
        $this->load->view('layout/footer');
    }

    public function cetakKesimpulan($id, $tahun=""){
        $nip = $this->session->nip;
        $tahun1 = $this->dbObject->get_by_id_general('tahun', 'id', $tahun);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Kesimpulan',
            'tahun'=>$tahun1,
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'kesimpulan' =>$this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id, 'masa_pelaksanaan', $tahun1[0]->id),
            'kesimpulan1'=> $this->dbObject->get_by_id_general1('kesimpulan_ases1','id_dosen', $id, 'masa_pelaksanaan', $tahun1[0]->id),
            'kesimpulan2'=> $this->dbObject->get_by_id_general1('kesimpulan_ases2','id_dosen', $id, 'masa_pelaksanaan', $tahun1[0]->id),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun1[0]->id),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun1[0]->id),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun1[0]->id),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun1[0]->id),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun1[0]->id),
        );

        $this->load->library('pdf');
                $this->load->view("admin/cetakKesimpulan",$data);
                $paper_size  = 'A4'; //paper size
                $orientation = 'landscape'; //tipe format kertas
                $html = $this->output->get_output();

	        $this->pdf->set_paper($paper_size, $orientation);
	        //Convert to PDF
	        $this->pdf->load_html($html);
	        $this->pdf->render();
	        $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	
    }
    public function cetakBkd($id, $tahun){
        $nip = $this->session->nip;
        // $id = $this->session->id;
        $kes = $this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id,'masa_pelaksanaan', $tahun);
        $data = array(
            'nip' => $nip,
            'judul'=> 'BKD',
            'tahunS' => $tahun,
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'kesimpulan' => count($kes),
            'dosen' => $this->dbObject->get_by_id_general('dosen', 'id', $id),
            'fakultas' =>$this->dbObject->get_general('fakultas'),
            'studi' =>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
        );
        $this->load->library('pdf');
        $this->load->view("dosen/cetakBkd",$data);
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();

    $this->pdf->set_paper($paper_size, $orientation);
    //Convert to PDF
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	
    }
    public function ubahPassasessor($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Ubah Password Asessor',
            'admin'=>$this->dbObject->get_by_id_general('asessor', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/ubahPassAsessor.php',$data);
        $this->load->view('layout/footer');

        if($param=="do_update"){
            $pass = $this->input->post('pass');
            $pass1 = $this->input->post('pass1');
            if($pass == $pass1){
                $data = array(
                        'password' => md5($pass),
                        'pass_asli'=> $pass,
                );
                if($this->dbObject->update_general('asessor', 'id', $id, $data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Password Berhasil diubah!');
                    redirect('Admin/ubahPassasessor/'.$id);
                }
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Password Tidak Berhasil diubah. Coba Lagi!');
                redirect('Admin/ubahPassasessor/'.$id);
            }
        }
    }

    public function dosen($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Manajemen Dosen',
            'dosen'=> $this->dbObject->get_general('dosen'),
            'studi' =>$this->dbObject->get_general('program_studi'),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/dosen',$data);
        $this->load->view('layout/footer');
        if($param=="do_create"){
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $program_studi = $this->input->post('program_studi');
            $pass = $this->input->post('pass');
            $username = $this->input->post('username');

            $data = array(
                'nip' => $nip,
                'nama'=> $nama,
                'username' => $username,
                'program_studi' => $program_studi,
                'password'=> md5($pass),
                'pass_asli'=>$pass,
            );
            if($this->dbObject->create_general('dosen',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                redirect('Admin/dosen');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                redirect('Admin/dosen');
            }
        }
    }
    public function editFoto($id, $param=""){
        if($param=="do_edit"){

            $config['upload_path']          = './assets/img';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto_dosen')){
                unlink('./assets/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->foto_dosen);
                $gambar = 'img/' . $this->upload->data('file_name');
                $data['foto_dosen'] = $gambar;
                   
            }
            if($this->dbObject->update_general('dosen','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/editDosen/'.$id);
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/editDosen/'.$id);
            }
        }
    }
    public function editDosen($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Dosen',
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'fakultas' =>$this->dbObject->get_general('fakultas'),
            'studi' =>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editDosen',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){

            $no_sertifikat = $this->input->post('no_sertifikat');
            $nip = $this->input->post('nip');
            $nidn = $this->input->post('nidn');
            $nama = $this->input->post('nama');
            $nama_pt = $this->input->post('nama_pt');
            $alamat_pt = $this->input->post('alamat_pt');
            $fakultas = $this->input->post('fakultas');
            $program_studi = $this->input->post('program_studi');
            $jab_fungsional = $this->input->post('jab_fungsional');
            $golongan = $this->input->post('golongan');
            $pend_s1 = $this->input->post('pend_s1');
            $judul_skripsi = $this->input->post('judul_skripsi');
            $pend_s2 = $this->input->post('pend_s2');
            $judul_tesis = $this->input->post('judul_tesis');
            $pend_s3 = $this->input->post('pend_s3');
            $judul_disertasi = $this->input->post('judul_disertasi');
            $jenis_dosen = $this->input->post('jenis_dosen');
            $bidang_ilmu = $this->input->post('bidang_ilmu');
            $minat = $this->input->post('minat');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $pimpinan = $this->input->post('pimpinan');
            $username = $this->input->post('username');
            $data = array(
                'no_sertifikat' => $no_sertifikat,
                'nidn' => $nidn,
                'nip' => $nip,
                'username' => $username,
                'nama'=> $nama,
                'nama_pt'=> $nama_pt,
                'alamat_pt'=> $alamat_pt,
                'fakultas'=> $fakultas,
                'program_studi'=> $program_studi,
                'jab_fungsional'=> $jab_fungsional,
                'golongan'=> $golongan,
                'pend_s1'=> $pend_s1,
                'judul_skripsi'=> $judul_skripsi,
                'pend_s2'=> $pend_s2,
                'judul_tesis'=> $judul_tesis,
                'pend_s3'=> $pend_s3,
                'judul_disertasi'=> $judul_disertasi,
                'jenis_dosen'=> $jenis_dosen,
                'bidang_ilmu'=> $bidang_ilmu,
                'minat'=> $minat,
                'no_hp'=> $no_hp,
                'email'=> $email,
                'pimpinan'=> $pimpinan,
            );
            $config['upload_path']          = './uploads/dosen';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('foto_dosen')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->foto_dosen);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['foto_dosen'] = $gambar;
            }

            if($this->upload->do_upload('ijazah_s1')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->ijazah_s1);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['ijazah_s1'] = $gambar;
            }

            if($this->upload->do_upload('transkrip_s1')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->transkrip_s1);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['transkrip_s1'] = $gambar;
            }

            if($this->upload->do_upload('ijazah_s2')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->ijazah_s2);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['ijazah_s2'] = $gambar;
            }

            if($this->upload->do_upload('transkrip_s2')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->transkrip_s2);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['transkrip_s2'] = $gambar;
            }

            if($this->upload->do_upload('ijazah_s3')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->ijazah_s3);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['ijazah_s3'] = $gambar;
            }

            if($this->upload->do_upload('transkrip_s3')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->transkrip_s3);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['transkrip_s3'] = $gambar;
            }

            if($this->upload->do_upload('file_jenis_dosen')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->file_jenis_dosen);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['file_jenis_dosen'] = $gambar;
            }

            if($this->upload->do_upload('sptjm')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->sptjm);
				$gambar = 'dosen/' . $this->upload->data('file_name');
				$data['sptjm'] = $gambar;
            }
            
            if($this->dbObject->update_general('dosen','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/editDosen/'.$id);
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/editDosen/'.$id);
            }
        }
    }

    public function lihatDosen($id){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Lihat Identitas Dosen',
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'fakultas' =>$this->dbObject->get_general('fakultas'),
            'studi' =>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/lihatDosen',$data);
        $this->load->view('layout/footer');
    }
    public function ubahPassDosen($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Ubah Password Dosen',
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/ubahPassDosen.php',$data);
        $this->load->view('layout/footer');

        if($param=="do_update"){
            $pass = $this->input->post('pass');
            $pass1 = $this->input->post('pass1');
            if($pass == $pass1){
                $data = array(
                        'password' => md5($pass),
                        'pass_asli'=> $pass,
                );
                if($this->dbObject->update_general('dosen', 'id', $id, $data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Password Berhasil diubah!');
                    redirect('Admin/ubahPassDosen/'.$id);
                }
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Password Tidak Berhasil diubah. Coba Lagi!');
                redirect('Admin/ubahPassDosen/'.$id);
            }
        }
    }

    public function hapusDosen($id){
        if($this->dbObject->delete_general('dosen','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/dosen');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/dosen');
        }
    }

    public function tahunStudi($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Tahun Akademik',
            'tahun'=>$this->dbObject->get_general_order('tahun')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/tahun',$data);
        $this->load->view('layout/footer');

        if($param=="do_create"){
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $semester = $this->input->post('semester');

            $data = array(
                'tahun' => $tahun,
                'status'=> $status,
                'semester'=> $semester
            );
            if($status=='1'){
                $data1 = array(
                    'status' => "0"
                );
                $this->dbObject->update_general('tahun','status','1',$data1);
            }
            if($this->dbObject->create_general('tahun',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                redirect('Admin/tahunStudi');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                redirect('Admin/tahunStudi');
            }
        }
    }

    public function tahunStatus($id, $status){
        $data = array(
            'status' => $status
        );
        if($status=='1'){
            $data1 = array(
                'status' => "0"
            );
            $this->dbObject->update_general('tahun','status','1',$data1);
        }
        if($this->dbObject->update_general('tahun','id',$id,$data)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
            redirect('Admin/tahunStudi');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
            redirect('Admin/tahunStudi');
        }
    }
    public function editTahun($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Tahun Akademik',
            'tahun'=>$this->dbObject->get_by_id_general('tahun','id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editTahun',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $tahun =  $this->input->post('tahun');
                $status = $this->input->post('status');
                $semester = $this->input->post('semester');
                $data = array(
                    'tahun' => $tahun,
                    'status'=> $status,
                    'semester' => $semester
                );
                if($status=='1'){
                    $data1 = array(
                        'status' => "0"
                    );
                    $this->dbObject->update_general('tahun','status','1',$data1);
                }
                if($this->dbObject->update_general('tahun','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    redirect('Admin/tahunStudi');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    redirect('Admin/tahunStudi');
                }
        }


    }
    public function hapusTahun($id){
        if($this->dbObject->delete_general('tahun','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/tahunStudi');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/tahunStudi');
        }
    }

    public function rubrik($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Rubrik',
            'pendidikan' => $this->dbObject->get_general('r_pendidikan'),
            'penelitian' => $this->dbObject->get_general('r_penelitian'),
            'pengabdian' => $this->dbObject->get_general('r_pengabdian'),
            'penunjang' => $this->dbObject->get_general('r_penunjang'),
            'khusus' => $this->dbObject->get_general('r_khusus_prof')
        );
        if($this->session->active1!=""||$this->session->active1!=null ||$this->session->active2!=""||$this->session->active2!=null ||$this->session->active3!=""||$this->session->active3!=null ||$this->session->active4!=""||$this->session->active4!=null){
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
        }else{
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
        }
        $this->load->view('layout/header', $data);
        $this->load->view('admin/rubrik',$data);
        $this->load->view('layout/footer');

        if($param=="create_pendidikan"){
                $kegiatan = $this->input->post('kegiatan');
                $keterangan = $this->input->post('keterangan');
                $subkegiatan = $this->input->post('subkegiatan');
                $data = array(
                    'kegiatan'=> $kegiatan,
                    'keterangan' => $keterangan,
                    'sub_kegiatan'=> $subkegiatan
                );

                if($this->dbObject->create_general('r_pendidikan',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Admin/rubrik');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Admin/rubrik');
                }
                
        }

        if($param=="create_penelitian"){
            $kegiatan = $this->input->post('kegiatan');
            $keterangan = $this->input->post('keterangan');
            $subkegiatan = $this->input->post('subkegiatan');
            $data = array(
                'kegiatan'=> $kegiatan,
                'keterangan' => $keterangan,
                'sub_kegiatan'=> $subkegiatan
            );

            if($this->dbObject->create_general('r_penelitian',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                $this->session->set_flashdata('active1', 'active');
                $this->session->set_flashdata('show1', 'show');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                $this->session->set_flashdata('active1', 'active');
                $this->session->set_flashdata('show1', 'show');
                redirect('Admin/rubrik');
            }
            
        }

        if($param=="create_pengabdian"){
            $kegiatan = $this->input->post('kegiatan');
            $keterangan = $this->input->post('keterangan');
            $subkegiatan = $this->input->post('subkegiatan');
            $data = array(
                'kegiatan'=> $kegiatan,
                'keterangan' => $keterangan,
                'sub_kegiatan'=> $subkegiatan
            );

            if($this->dbObject->create_general('r_pengabdian',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                $this->session->set_flashdata('active2', 'active');
                $this->session->set_flashdata('show2', 'show');
                $this->session->set_flashdata('active1', '');
                $this->session->set_flashdata('show1', '');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                $this->session->set_flashdata('active2', 'active');
                $this->session->set_flashdata('show2', 'show');
                $this->session->set_flashdata('active1', '');
                $this->session->set_flashdata('show1', '');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }   
        }
        if($param=="create_penunjang"){
            $kegiatan = $this->input->post('kegiatan');
            $keterangan = $this->input->post('keterangan');
            $subkegiatan = $this->input->post('subkegiatan');
            $jenis = $this->input->post('jenis');
            $data = array(
                'kegiatan'=> $kegiatan,
                'keterangan' => $keterangan,
                'sub_kegiatan'=> $subkegiatan,
                'jenis'=> $jenis
            );

            if($this->dbObject->create_general('r_penunjang',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                $this->session->set_flashdata('active3', 'active');
                $this->session->set_flashdata('show3', 'show');
                $this->session->set_flashdata('active2', '');
                $this->session->set_flashdata('show2', '');
                $this->session->set_flashdata('active1', '');
                $this->session->set_flashdata('show1', '');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                $this->session->set_flashdata('active3', 'active');
                $this->session->set_flashdata('show3', 'show');
                $this->session->set_flashdata('active2', '');
                $this->session->set_flashdata('show2', '');
                $this->session->set_flashdata('active1', '');
                $this->session->set_flashdata('show1', '');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }   
        }

        if($param=="create_khusus"){
            $kegiatan = $this->input->post('kegiatan');
            $keterangan = $this->input->post('keterangan');
            $subkegiatan = $this->input->post('subkegiatan');
            $jenis = $this->input->post('jenis');
            $data = array(
                'kegiatan'=> $kegiatan,
                'keterangan' => $keterangan,
                'sub_kegiatan'=> $subkegiatan,
                'jenis'=> $jenis
            );

            if($this->dbObject->create_general('r_khusus_prof',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                $this->session->set_flashdata('active4', 'active');
                $this->session->set_flashdata('show4', 'show');
                $this->session->set_flashdata('active3', '');
                $this->session->set_flashdata('show3', '');
                $this->session->set_flashdata('active2', '');
                $this->session->set_flashdata('show2', '');
                $this->session->set_flashdata('active1', '');
                $this->session->set_flashdata('show1', '');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                $this->session->set_flashdata('active4', 'active');
                $this->session->set_flashdata('show4', 'show');
                $this->session->set_flashdata('active3', '');
                $this->session->set_flashdata('show3', '');
                $this->session->set_flashdata('active2', '');
                $this->session->set_flashdata('show2', '');
                $this->session->set_flashdata('active1', '');
                $this->session->set_flashdata('show1', '');
                $this->session->set_flashdata('active', '');
                $this->session->set_flashdata('show', '');
                redirect('Admin/rubrik');
            }   
        }
    }

    public function editPendidikan($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Kegiatan Pendidikan',
            'pendidikan' => $this->dbObject->get_by_id_general('r_pendidikan', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editPendidikan',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $kegiatan = $this->input->post('kegiatan');
                $keterangan = $this->input->post('keterangan');
                $subkegiatan = $this->input->post('subkegiatan');
                $data = array(
                    'kegiatan'=> $kegiatan,
                    'keterangan' => $keterangan,
                    'sub_kegiatan'=> $subkegiatan
                );

                if($this->dbObject->update_general('r_pendidikan','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Admin/rubrik');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Admin/rubrik');
                }
        }
    }

    public function editPenelitian($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Kegiatan Penelitian',
            'penelitian' => $this->dbObject->get_by_id_general('r_penelitian', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editPenelitian',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $kegiatan = $this->input->post('kegiatan');
                $keterangan = $this->input->post('keterangan');
                $subkegiatan = $this->input->post('subkegiatan');
                $data = array(
                    'kegiatan'=> $kegiatan,
                    'keterangan' => $keterangan,
                    'sub_kegiatan'=> $subkegiatan
                );

                if($this->dbObject->update_general('r_penelitian','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active1', 'active');
                    $this->session->set_flashdata('show1', 'show');
                    redirect('Admin/rubrik');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active1', 'active');
                    $this->session->set_flashdata('show1', 'show');
                    redirect('Admin/rubrik');
                }
        }
    }

    public function editPengabdian($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Kegiatan Pengabdian',
            'pengabdian' => $this->dbObject->get_by_id_general('r_pengabdian', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editPengabdian',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $kegiatan = $this->input->post('kegiatan');
                $keterangan = $this->input->post('keterangan');
                $subkegiatan = $this->input->post('subkegiatan');
                $data = array(
                    'kegiatan'=> $kegiatan,
                    'keterangan' => $keterangan,
                    'sub_kegiatan'=> $subkegiatan
                );

                if($this->dbObject->update_general('r_pengabdian','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active2', 'active');
                    $this->session->set_flashdata('show2', 'show');
                    redirect('Admin/rubrik');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active2', 'active');
                    $this->session->set_flashdata('show2', 'show');
                    redirect('Admin/rubrik');
                }
        }
    }
    public function editPenunjang($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Kegiatan Penunjang',
            'penunjang' => $this->dbObject->get_by_id_general('r_penunjang', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editPenunjag',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $kegiatan = $this->input->post('kegiatan');
                $keterangan = $this->input->post('keterangan');
                $subkegiatan = $this->input->post('subkegiatan');
                $jenis = $this->input->post('jenis');
                $data = array(
                    'kegiatan'=> $kegiatan,
                    'keterangan' => $keterangan,
                    'sub_kegiatan'=> $subkegiatan,
                    'jenis' => $jenis
                );

                if($this->dbObject->update_general('r_penunjang','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active3', 'active');
                    $this->session->set_flashdata('show3', 'show');
                    redirect('Admin/rubrik');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active3', 'active');
                    $this->session->set_flashdata('show3', 'show');
                    redirect('Admin/rubrik');
                }
        }
    }

    public function editKhusus($id,$param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Kegiatan Khusus Profesor',
            'khusus' => $this->dbObject->get_by_id_general('r_khusus_prof', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editKhusus',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $kegiatan = $this->input->post('kegiatan');
                $keterangan = $this->input->post('keterangan');
                $subkegiatan = $this->input->post('subkegiatan');
                $jenis = $this->input->post('jenis');
                $data = array(
                    'kegiatan'=> $kegiatan,
                    'keterangan' => $keterangan,
                    'sub_kegiatan'=> $subkegiatan,
                    'jenis'=> $jenis
                );

                if($this->dbObject->update_general('r_khusus_prof','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active4', 'active');
                    $this->session->set_flashdata('show4', 'show');
                    redirect('Admin/rubrik');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active4', 'active');
                    $this->session->set_flashdata('show4', 'show');
                    redirect('Admin/rubrik');
                }
        }
    }
    public function hapusPendidikan($id){
        if($this->dbObject->delete_general('r_pendidikan','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
            redirect('Admin/rubrik');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
            redirect('Admin/rubrik');
        }
    }
    public function hapusPenelitian($id){
        if($this->dbObject->delete_general('r_penelitian','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            redirect('Admin/rubrik');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            redirect('Admin/rubrik');
        }
    }

    public function hapusPengabdian($id){
        if($this->dbObject->delete_general('r_pengabdian','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active2', 'active');
            $this->session->set_flashdata('show2', 'show');
            redirect('Admin/rubrik');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active2', 'active');
            $this->session->set_flashdata('show2', 'show');
            redirect('Admin/rubrik');
        }
    }

    public function hapusPenunjang($id){
        if($this->dbObject->delete_general('r_penunjang','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active3', 'active');
            $this->session->set_flashdata('show3', 'show');
            redirect('Admin/rubrik');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active3', 'active');
            $this->session->set_flashdata('show3', 'show');
            redirect('Admin/rubrik');
        }
    }

    public function hapusKhusus($id){
        if($this->dbObject->delete_general('r_khusus_prof','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active4', 'active');
            $this->session->set_flashdata('show4', 'show');
            redirect('Admin/rubrik');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active4', 'active');
            $this->session->set_flashdata('show4', 'show');
            redirect('Admin/rubrik');
        }
    }

    public function jenisDosen($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Jenis Dosen',
            'dosen' => $this->dbObject->get_general('jenis_dosen')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/jenisDosen',$data);
        $this->load->view('layout/footer');

        if($param =="do_create"){
                $jenis_dosen = $this->input->post('jenis_dosen');
                $data = array(
                    'jenis_dosen' => $jenis_dosen
                );
                if($this->dbObject->create_general('jenis_dosen',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    redirect('Admin/jenisDosen');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    redirect('Admin/jenisDosen');
                }
        }
    }

    public function editJdosen($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Jenis Dosen',
            'dosen'=>$this->dbObject->get_by_id_general('jenis_dosen','id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editJdosen',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $jenis_dosen =  $this->input->post('jenis_dosen');
                $data = array(
                    'jenis_dosen' => $jenis_dosen,
                );

                if($this->dbObject->update_general('jenis_dosen','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    redirect('Admin/jenisDosen');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    redirect('Admin/jenisDosen');
                }
        }
    }

    public function hapusJdosen($id){
        if($this->dbObject->delete_general('jenis_dosen','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/jenisDosen');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/jenisDosen');
        }
    }

    public function fakultas($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Fakultas',
            'fakultas' => $this->dbObject->get_general('fakultas')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/fakultas',$data);
        $this->load->view('layout/footer');

        if($param =="do_create"){
                $fakultas = $this->input->post('fakultas');
                $data = array(
                    'fakultas' => $fakultas
                );
                if($this->dbObject->create_general('fakultas',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    redirect('Admin/fakultas');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    redirect('Admin/fakultas');
                }
        }
    }
    public function editfakultas($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Fakultas',
            'fakultas'=>$this->dbObject->get_by_id_general('fakultas','id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editFakultas',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $fakultas =  $this->input->post('fakultas');
                $data = array(
                    'fakultas' => $fakultas,
                );

                if($this->dbObject->update_general('fakultas','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    redirect('Admin/fakultas');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    redirect('Admin/fakultas');
                }
        }
    }

    public function hapusFakultas($id){
        if($this->dbObject->delete_general('fakultas','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/fakultas');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/fakultas');
        }
    }

    public function pStudi($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Program Studi',
            'studi' => $this->dbObject->get_general('program_studi'),
            'fakultas'=>$this->dbObject->get_general('fakultas')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/pStudi',$data);
        $this->load->view('layout/footer');

        if($param =="do_create"){
                $program_studi = $this->input->post('program_studi');
                $idFakultas = $this->input->post('id_fakultas');
                $data = array(
                    'id_fakultas' => $idFakultas,
                    'program_studi' => $program_studi
                );
                if($this->dbObject->create_general('program_studi',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    redirect('Admin/pStudi');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    redirect('Admin/pStudi');
                }
        }
    }

    public function editpStudi($id, $param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Program Studi',
            'program_studi'=>$this->dbObject->get_by_id_general('program_studi','id', $id),
            'fakultas'=>$this->dbObject->get_general('fakultas')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editpStudi',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $id_fakultas =  $this->input->post('id_fakultas');
                $program_studi = $this->input->post('program_studi');
                $data = array(
                    'id_fakultas' => $id_fakultas,
                    'program_studi' => $program_studi
                );

                if($this->dbObject->update_general('program_studi','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    redirect('Admin/pStudi');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    redirect('Admin/pStudi');
                }
        }
    }

    public function hapuspStudi($id){
        if($this->dbObject->delete_general('program_studi','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/pStudi');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/pStudi');
        }
    }

    public function sk(){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Surat Keputusan',
            'sk'=>$this->dbObject->get_by_id_general('sk', 'masa_sk', $tahun),
            'dosen'=>$this->dbObject->get_general('dosen'),
            'asesor'=>$this->dbObject->get_general('asessor'),
            'program_studi'=>$this->dbObject->get_general('program_studi'),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/sk',$data);
        $this->load->view('layout/footer');
    }

    public function editSk($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Surat Keputusan',
            'sk'=>$this->dbObject->get_by_id_general1('sk', 'id_dosen', $id, 'masa_sk', $tahun),
            'dosen'=>$this->dbObject->get_by_id_general('dosen','id', $id),
            'asesor'=>$this->dbObject->get_general('asessor'),
            'program_studi'=>$this->dbObject->get_general('program_studi'),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/editSk',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
            $asesor1 = $this->input->post('asesor1');
            $asesor2 = $this->input->post('asesor2');

            if($this->dbObject->cek_dosen($id,$tahun)){
                // var_dump($this->dbObject->cek_dosen($id));die;
                $data = array(
                    'id_dosen' => $id,
                    'asesor1' => $asesor1,
                    'asesor2' => $asesor2,
                    'date_create' => time(),
                    'masa_sk' => $tahun
                );
                if($this->dbObject->create_general('sk',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    redirect('Admin/sk');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    redirect('Admin/sk');
                }
            }else{
                $data = array(
                    'asesor1' => $asesor1,
                    'asesor2' => $asesor2,
                    'date_create' => time(),
                );
                if($this->dbObject->update_general_two('sk','id_dosen',$id,'masa_sk',$tahun,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    redirect('Admin/sk');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    redirect('Admin/sk');
                }
            }
        }
    }
    public function hapusSk($id){
        if($this->dbObject->delete_general('sk','id_dosen', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/sk');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/sk');
        }
    }

    public function kePenelitian($id,$tahun){
        $this->session->set_flashdata('active1', 'active');
        $this->session->set_flashdata('show1', 'show');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Admin/bkd/'.$id.'/'.$tahun);
    }

    public function kePendidikan($id,$tahun){
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Admin/bkd/'.$id.'/'.$tahun);
    }

    public function kePengabdian($id,$tahun){
        $this->session->set_flashdata('active2', 'active');
        $this->session->set_flashdata('show2', 'show');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Admin/bkd/'.$id.'/'.$tahun);
    }

    public function kePenunjang($id,$tahun){
        $this->session->set_flashdata('active3', 'active');
        $this->session->set_flashdata('show3', 'show');
        $this->session->set_flashdata('active2', '');
        $this->session->set_flashdata('show2', '');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Admin/bkd/'.$id.'/'.$tahun);
    }

    public function keKhusus($id,$tahun){
        $this->session->set_flashdata('active4', 'active');
        $this->session->set_flashdata('show4', 'show');
        $this->session->set_flashdata('active3', '');
        $this->session->set_flashdata('show3', '');
        $this->session->set_flashdata('active2', '');
        $this->session->set_flashdata('show2', '');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Admin/bkd/'.$id.'/'.$tahun);
    }

    public function keUpload($id,$tahun){
        
        $this->session->set_flashdata('active6', 'active');
        $this->session->set_flashdata('show6', 'show');
        $this->session->set_flashdata('active4', '');
        $this->session->set_flashdata('show4', '');
        $this->session->set_flashdata('active3', '');
        $this->session->set_flashdata('show3', '');
        $this->session->set_flashdata('active2', '');
        $this->session->set_flashdata('show2', '');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Admin/bkd/'.$id.'/'.$tahun);
    }

    public function cetakSk(){
        $data = array(
            'judul'=> 'Surat Keputusan',
            'lampiran' => $this->input->post('lampiran'),
            'tempat' => $this->input->post('tempat'),
            'ket1' => $this->input->post('ket1'),
            'ket2' => $this->input->post('ket2'),
            'tanggal' => $this->input->post('tanggal'),
            'nama' => $this->input->post('nama'),
            'sk'=>$this->dbObject->get_general('sk'),
            'dosen'=>$this->dbObject->get_general('dosen'),
            'asesor'=>$this->dbObject->get_general('asessor'),
            'program_studi'=>$this->dbObject->get_general('program_studi'),
        );
        $this->load->library('pdf');
        $this->load->view("admin/cetakSk",$data);
        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->pdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->pdf->load_html($html);
        $this->pdf->render();
        $this->pdf->stream("SK.pdf", array('Attachment'=>0));	
    }

    public function laporanDosen(){
        $nip = $this->session->nip;
        $fakultas = $this->session->fakultas;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Pilih Fakultas',
            'fakultas' => $this->dbObject->get_by_id_general('fakultas','id', $fakultas)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/piliFakultas',$data);
        $this->load->view('layout/footer');
    }

    public function daftarDosen($id){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Daftar Dosen',
            'dosen' => $this->dbObject->get_by_id_general('dosen', 'fakultas', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/daftarDosen',$data);
        $this->load->view('layout/footer');
    }

    public function laporanHarian($id){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'id_dosen' => $id,
            'judul'=> 'Laporan Harian Dosen',
            'laporan' => $this->dbObject->get_by_id_general('laporan_dosen', 'id_dosen', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/laporanHarian',$data);
        $this->load->view('layout/footer');
    }

    public function cetakLaporan($id){
        // $id = $this->session->id;
                $satu = $this->input->post('tanggal_satu');
                $dua  = $this->input->post('tanggal_dua');
                $atasan = $this->input->post('atasan');
                $data = array(
                    'dosen' => $this->dbObject->get_by_id_general('dosen', 'id', $id),
                    'laporan' => $this->dbObject->get_by_id_generalT('laporan_dosen', 'id_dosen', $id, $satu, $dua),
                    'atasan' => $atasan
                );
                $this->load->library('pdf');
                $this->load->view("admin/cetakLaporan",$data);
                $paper_size  = 'A4'; //paper size
                $orientation = 'landscape'; //tipe format kertas
                $html = $this->output->get_output();

	        $this->pdf->set_paper($paper_size, $orientation);
	        //Convert to PDF
	        $this->pdf->load_html($html);
	        $this->pdf->render();
	        $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	
    }

    public function cetakNilai1($id,$tahun=""){
        $nip = $this->session->nip;
        // $idAs = $this->session->id;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'id', $tahun);
        $sk = $this->dbObject->get_by_id_general1('sk', 'id_dosen', $id,'masa_sk', $tahun[0]->id);
        // var_dump($sk[0]->asesor2);die;
        $asesor ="";
        if(count($sk)>0){
            $kesimpulan = $this->dbObject->get_by_id_general2('kesimpulan_ases1', 'id_dosen', $id,'id_asesor',$sk[0]->asesor1,'masa_pelaksanaan',$tahun[0]->id);
            $asesor = "I";
            $ska = $sk;
        }
        $data = array(
            'nip' => $nip,
            'id' => $id,
            'judul'=> 'Nilai Kesimpulan Dosen',
            'tahun' => $tahun,
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'studi'=>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'kesimpulan' => $kesimpulan,
            'asesor' => $asesor,
            'as' => $this->dbObject->get_by_id_general('asessor', 'id', $sk[0]->asesor1)
        );
        $this->load->library('pdf');
        $this->load->view("admin/cetakNilai1",$data);
        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

    $this->pdf->set_paper($paper_size, $orientation);
    //Convert to PDF
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	

    }
    public function cetakNilai2($id,$tahun=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'id', $tahun);
        $sk = $this->dbObject->get_by_id_general1('sk', 'id_dosen', $id,'masa_sk', $tahun[0]->id);
        // var_dump($sk[0]->asesor2);die;
        $asesor ="";
        if(count($sk)>0){
            $kesimpulan = $this->dbObject->get_by_id_general2('kesimpulan_ases2', 'id_dosen', $id,'id_asesor',$sk[0]->asesor2,'masa_pelaksanaan',$tahun[0]->id);
            $asesor = "II";
            $ska = $sk;
        }
        $data = array(
            'nip' => $nip,
            'id' => $id,
            'judul'=> 'Nilai Kesimpulan Dosen',
            'tahun' => $tahun,
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'studi'=>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'kesimpulan' => $kesimpulan,
            'asesor' => $asesor,
            'as' => $this->dbObject->get_by_id_general('asessor', 'id', $sk[0]->asesor2)
        );
        $this->load->library('pdf');
        $this->load->view("admin/cetakNilai1",$data);
        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

    $this->pdf->set_paper($paper_size, $orientation);
    //Convert to PDF
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	

    }
    
    public function file($path,$file ){
        // var_dump($file);die;
        force_download('uploads/'.$path.'/'.$file,NULL);
    }

    public function informasi($param=""){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul' => 'Informasi',
            'info' => $this->dbObject->get_general('info')
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/informasi',$data);
        $this->load->view('layout/footer');

        if($param=="do_create"){
            $info = $this->input->post('info');
            $kepada = $this->input->post('kepada');
            $tipe = $this->input->post('tipe');

            $data = array(
                'info' => $info,
                'kepada' => $kepada,
                'type' => $tipe,
                'tanggal' => date('Y-m-d-H-i-s')
            );

            $config['upload_path']          = './assets/img/info/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
           
            $this->load->library('upload', $config);
            // var_dump($this->upload->do_upload('foto'));die;
            if($this->upload->do_upload('foto')){
                $gambar = 'img/info/' . $this->upload->data('file_name');
                $data['gambar'] = $gambar;
                   
            }
            if($this->dbObject->create_general('info',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                redirect('Admin/informasi');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                redirect('Admin/informasi');
            }
        }
    }

    public function hapusInfo($id){
        if($this->dbObject->delete_general('info','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Admin/informasi');
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Admin/informasi');
        }
    }
    public function aktivasi(){
        $bkdDosen = $this->dbObject->get_by_id_general('masa_bkd', 'id', 1);
        $bkdAsessor = $this->dbObject->get_by_id_general('masa_bkd', 'id', 2);
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul' => 'Aktivasi Masa BKD',
            'bkdDosen' => $bkdDosen,
            'bkdAsessor' => $bkdAsessor
        );
        $this->load->view('layout/header', $data);
        $this->load->view('admin/aktivasi', $data);
        $this->load->view('layout/footer');
    }

    public function masaBKD($param){
        if($param == 'simpanMasaDosen'){
            $status = $this->input->POST('masaDosen');
            $tanggal = $this->input->POST('tanggalDosen');

            $data = array(
                'status' => $status,
                'tanggal' => $tanggal
            );
            if($this->dbObject->update_general('masa_bkd','id',1,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/aktivasi');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/aktivasi');
            }
        } 
        if($param == 'simpanMasaAses'){
            $status = $this->input->POST('masaAses');
            $tanggal = $this->input->POST('tanggalAses');

            $data = array(
                'status' => $status,
                'tanggal' => $tanggal
            );
            if($this->dbObject->update_general('masa_bkd','id',2,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Admin/aktivasi');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Admin/aktivasi');
            }
        }     
    }
}