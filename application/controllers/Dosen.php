<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDosen', 'dbObject');
        $this->load->library('encryption');
        $this->load->helper(array('url','download'));		
        if($this->session->web != "bkd" ||$this->session->namaa == null || $this->session->namaa == "" ||  $this->session->level != 11){
            redirect('Welcome/logout');
        }
    }
    
    public function index(){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Dashboard',
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id),
            'info' => $this->dbObject->get_general('info')
        );
        $this->load->view('layout/header',$data);
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }

    public function dataDiri(){
        $nip = $this->session->namaa;
        $id = $this->session->id;
        $tahunAktif = $this->dbObject->get_by_id_general('tahun', 'status', '1');
        $statusDosen = $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahunAktif[0]->id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Data Diri',
            'dosen' => $this->dbObject->get_by_id_general('dosen', 'id', $id),
            'fakultas' =>$this->dbObject->get_general('fakultas'),
            'studi' =>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id),
            'status' => $statusDosen
        );
        $this->load->view('layout/header',$data);
        $this->load->view('dosen/dataDiri',$data);
        $this->load->view('layout/footer');
    }
    public function editFoto($id, $param=""){
        if($param=="do_edit"){

            $config['upload_path']          = './assets/img';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto_dosen')){
                unlink('./assets/img/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->foto_dosen);
                $gambar = 'img/' . $this->upload->data('file_name');
                $data['foto_dosen'] = $gambar;
                   
            }
            if($this->dbObject->update_general('dosen','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Dosen/dataDiri');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Dosen/dataDiri');
            }
        }
    }

    public function editdataDiri($id, $param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Dosen',
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'fakultas' =>$this->dbObject->get_general('fakultas'),
            'studi' =>$this->dbObject->get_general('program_studi'),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editdataDiri',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){

            $no_sertifikat = $this->input->post('no_sertifikat');
            $nip = $this->input->post('nip');
            $nidn = $this->input->post('nidn');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
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
            $data = array(
                'no_sertifikat' => $no_sertifikat,
                'nidn' => $nidn,
                'nip' => $nip,
                'nama'=> $nama,
                'username' =>$username,
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
        
            // if($this->upload->do_upload('foto_dosen')){
			// 	unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->foto_dosen);
			// 	$gambar = 'dosen/' . $this->upload->data('file_name');
			// 	$data['foto_dosen'] = $gambar;
            // }

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
                redirect('Dosen/dataDiri');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Dosen/dataDiri');
            }
        }
    }

    public function pilihTahun(){
        $masabkd = $this->dbObject->get_by_id_general('masa_bkd','id',1);
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Pilih Tahun Akademik',
            'tahun'=>$this->dbObject->get_general_order1('tahun'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id),
            'masa' => $masabkd
        );
        if($masabkd[0]->status == 'Aktif'){
            $views = 'tahunAkademik';
        }
        else {
            $views = 'bkdNonAktif';
        }
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/'.$views,$data);
        $this->load->view('layout/footer');
    }
    public function bkd($tahun="",$param=""){
        $nip = $this->session->namaa;
        $id = $this->session->id;
        $kes = $this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id,'masa_pelaksanaan', $tahun);
        $tahunAktif = $this->dbObject->get_by_id_general('tahun', 'status', '1');
        $data = array(
            'nip' => $nip,
            'judul'=> 'BKD',
            'tahunS' => $tahun,
            'tahunAktif' => $tahunAktif,
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'kesimpulan' => count($kes),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        if($this->session->active1!=""||$this->session->active1!=null ||$this->session->active2!=""||$this->session->active2!=null ||$this->session->active3!=""||$this->session->active3!=null ||$this->session->active4!=""||$this->session->active4!=null || $this->session->active6!=""||$this->session->active6!=null){
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
        }else{
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
        }
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/bkd',$data);
        $this->load->view('layout/footer');

        if($param=="create_pendidikan"){
            $cekSks = $this->dbObject->cekBatasSks($id, $tahun);
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bp');
            $sks = $this->input->post('sks');
            $masa = $this->input->post('masa');
            $status = $this->input->post('status');
            $bpk  = $this->input->post('bpk');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sksk');
            $maxSks = $cekSks + $sksk;
            if ($maxSks > 12){
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'SKS pendidikan dan penelitian tidak boleh lebih dari 12 SKS');
                $this->session->set_flashdata('active', 'active');
                $this->session->set_flashdata('show', 'show');
                redirect('Dosen/bkd/'.$tahun);
            }

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'id_dosen' => $id ,
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'status' => $status,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk,
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('fbp')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('fbpk')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

            if($this->dbObject->create_general('bkd_pendidikan',$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                $this->session->set_flashdata('active', 'active');
                $this->session->set_flashdata('show', 'show');
                redirect('Dosen/bkd/'.$tahun);
                }
                else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data gagal ditambahkan');
                $this->session->set_flashdata('active', 'active');
                $this->session->set_flashdata('show', 'show');
                redirect('Dosen/bkd/'.$tahun);
                }
                
    }

    if($param=="create_penelitian"){
        $cekSksPenelitian = $this->dbObject->cekBatasSks($id, $tahun);
        $kegiatan = $this->input->post('kegiatan');
        $bp = $this->input->post('bp');
        $sks = $this->input->post('sks');
        $masa = $this->input->post('masa');
        $bpk  = $this->input->post('bpk');
        $persen = $this->input->post('persen');
        $sksk = $this->input->post('sksk');
        $totalSksPenelitian = $cekSksPenelitian +  $sksk;
        if ($totalSksPenelitian > 12){
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'SKS pendidikan dan penelitian tidak boleh lebih dari 12 SKS');
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }

        $config['upload_path']          = './uploads/bkd';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1000000;
        // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
        
        $data = array(
            'id_dosen' => $id ,
            'kegiatan'=> $kegiatan,
            'bukti_penugasan_bk' => $bp,
            'sks_bk'=> $sks,
            'masa_pelaksaan' => $masa,
            'bukti_penugasan_k' => $bpk,
            'persen_capaian' =>$persen,
            'sks_capaian' => $sksk
        );
        $this->load->library('upload', $config);
    
        if($this->upload->do_upload('fbp')){
            // unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasanbk);
            $gambar = 'bkd/' . $this->upload->data('file_name');
            $data['file_bukti_penugasanbk'] = $gambar;
        }

        if($this->upload->do_upload('fbpk')){
            // unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasank);
            $gambar = 'bkd/' . $this->upload->data('file_name');
            $data['file_bukti_penugasank'] = $gambar;
        }

        if($this->dbObject->create_general('bkd_penelitian',$data)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }
        
    }

    if($param=="create_pengabdian"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bp');
            $sks = $this->input->post('sks');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bpk');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sksk');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'id_dosen' => $id ,
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('fbp')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('fbpk')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

        if($this->dbObject->create_general('bkd_pengabdian',$data)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
            $this->session->set_flashdata('active2', 'active');
            $this->session->set_flashdata('show2', 'show');
            $this->session->set_flashdata('active1', '');
            $this->session->set_flashdata('show1', '');
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
            $this->session->set_flashdata('active2', 'active');
            $this->session->set_flashdata('show2', 'show');
            $this->session->set_flashdata('active1', '');
            $this->session->set_flashdata('show1', '');
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
            redirect('Dosen/bkd/'.$tahun);
        }   
    }
    if($param=="create_penunjang"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bp');
            $sks = $this->input->post('sks');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bpk');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sksk');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'id_dosen' => $id ,
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('fbp')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('fbpk')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

        if($this->dbObject->create_general('bkd_penunjang',$data)){
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
            redirect('Dosen/bkd/'.$tahun);
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
            redirect('Dosen/bkd/'.$tahun);
        }   
    }

    if($param=="create_khusus"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bp');
            $sks = $this->input->post('sks');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bpk');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sksk');
            $jenis = $this->input->post('jenis');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'id_dosen' => $id ,
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk,
                'jenis'  => $jenis
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('fbp')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('fbpk')){
				// unlink('./uploads/bkd'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

        if($this->dbObject->create_general('bkd_khusus_prof',$data)){
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
            redirect('Dosen/bkd/'.$tahun);
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
            redirect('Dosen/bkd/'.$tahun);
        }   
    }
    }

    public function editPendidikan($id,$tahun="",$param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit BKD Pendidikan',
            'tahunS' => $tahun,
            'pendidikan' => $this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editPendidikan',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bukti_kegiatan_bk');
            $sks = $this->input->post('sks_bk');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bukti_kegiatan_k');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sks_k');
            $status = $this->input->post('status');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk,
                'status' => $status
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('file_bukti_bk')){
				 unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('file_bukti_k')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

                if($this->dbObject->update_general('bkd_pendidikan','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }
        }
    }

    public function editPenelitian($id,$tahun="", $param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit BKD Penelitian',
            'tahunS' => $tahun,
            'penelitian' => $this->dbObject->get_by_id_general('bkd_penelitian', 'id', $id),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editPenelitian',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bukti_kegiatan_bk');
            $sks = $this->input->post('sks_bk');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bukti_kegiatan_k');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sks_k');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('file_bukti_bk')){
				 unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_penelitian', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('file_bukti_k')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_penelitian', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

                if($this->dbObject->update_general('bkd_penelitian','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active1', 'active');
                    $this->session->set_flashdata('show1', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active1', 'active');
                    $this->session->set_flashdata('show1', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }
        }
    }

    public function editPengabdian($id,$tahun="",$param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit BKD Pengabdian',
            'tahunS' => $tahun,
            'pengabdian' => $this->dbObject->get_by_id_general('bkd_pengabdian', 'id', $id),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editPengabdian',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bukti_kegiatan_bk');
            $sks = $this->input->post('sks_bk');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bukti_kegiatan_k');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sks_k');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('file_bukti_bk')){
				 unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_pengabdian', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('file_bukti_k')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_pengabdian', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

                if($this->dbObject->update_general('bkd_pengabdian','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active2', 'active');
                    $this->session->set_flashdata('show2', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active2', 'active');
                    $this->session->set_flashdata('show2', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }
        }
    }

    public function editPenunjang($id,$tahun="",$param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Kegiatan Penunjang',
            'tahunS' => $tahun,
            'penunjang' => $this->dbObject->get_by_id_general('bkd_penunjang', 'id', $id),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editPenunjang',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bukti_kegiatan_bk');
            $sks = $this->input->post('sks_bk');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bukti_kegiatan_k');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sks_k');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('file_bukti_bk')){
				 unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_penunjang', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('file_bukti_k')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_penunjang', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }
                if($this->dbObject->update_general('bkd_penunjang','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active3', 'active');
                    $this->session->set_flashdata('show3', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active3', 'active');
                    $this->session->set_flashdata('show3', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }
        }
    }

    public function editKhusus($id,$tahun="",$param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit BKD Khusus Profesor',
            'tahunS' => $tahun,
            'khusus' => $this->dbObject->get_by_id_general('bkd_khusus_prof', 'id', $id),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editKhusus',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
            $kegiatan = $this->input->post('kegiatan');
            $bp = $this->input->post('bukti_kegiatan_bk');
            $sks = $this->input->post('sks_bk');
            $masa = $this->input->post('masa');
            $bpk  = $this->input->post('bukti_kegiatan_k');
            $persen = $this->input->post('persen');
            $sksk = $this->input->post('sks_k');
            $jenis = $this->input->post('jenis');

            $config['upload_path']          = './uploads/bkd';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            
            $data = array(
                'kegiatan'=> $kegiatan,
                'bukti_penugasan_bk' => $bp,
                'sks_bk'=> $sks,
                'masa_pelaksaan' => $masa,
                'bukti_penugasan_k' => $bpk,
                'persen_capaian' =>$persen,
                'sks_capaian' => $sksk,
                'jenis' => $jenis
            );
            $this->load->library('upload', $config);
        
            if($this->upload->do_upload('file_bukti_bk')){
				 unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_khusus_prof', 'id', $id)[0]->file_bukti_penugasanbk);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasanbk'] = $gambar;
            }

            if($this->upload->do_upload('file_bukti_k')){
				unlink('./uploads/'.$this->dbObject->get_by_id_general('bkd_khusus_prof', 'id', $id)[0]->file_bukti_penugasank);
				$gambar = 'bkd/' . $this->upload->data('file_name');
				$data['file_bukti_penugasank'] = $gambar;
            }

                if($this->dbObject->update_general('bkd_khusus_prof','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active4', 'active');
                    $this->session->set_flashdata('show4', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active4', 'active');
                    $this->session->set_flashdata('show4', 'show');
                    redirect('Dosen/bkd/'.$tahun);
                }
        }
    }

    public function hapusPendidikan($id,$tahun=""){
        if($this->dbObject->delete_general('bkd_pendidikan','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }
    }

    public function hapusPenelitian($id,$tahun=""){
        if($this->dbObject->delete_general('bkd_penelitian','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }
    }

    public function hapusPengabdian($id,$tahun=""){
        if($this->dbObject->delete_general('bkd_pengabdian','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active2', 'active');
            $this->session->set_flashdata('show2', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active2', 'active');
            $this->session->set_flashdata('show2', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }
    }

    public function hapusPenunjang($id,$tahun=""){
        if($this->dbObject->delete_general('bkd_penunjang','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active3', 'active');
            $this->session->set_flashdata('show3', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active3', 'active');
            $this->session->set_flashdata('show3', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }
    }

    public function hapusKhusus($id,$tahun=""){
        if($this->dbObject->delete_general('bkd_khusus_prof','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            $this->session->set_flashdata('active4', 'active');
            $this->session->set_flashdata('show4', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            $this->session->set_flashdata('active4', 'active');
            $this->session->set_flashdata('show4', 'show');
            redirect('Dosen/bkd/'.$tahun);
        }
    }

    public function kePenelitian($tahun){
            $this->session->set_flashdata('active1', 'active');
            $this->session->set_flashdata('show1', 'show');
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
            redirect('Dosen/bkd/'.$tahun);
    }

    public function kePendidikan($tahun){
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Dosen/bkd/'.$tahun);
    }

    public function kePengabdian($tahun){
        $this->session->set_flashdata('active2', 'active');
        $this->session->set_flashdata('show2', 'show');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Dosen/bkd/'.$tahun);
    }

    public function kePenunjang($tahun){
        $this->session->set_flashdata('active3', 'active');
        $this->session->set_flashdata('show3', 'show');
        $this->session->set_flashdata('active2', '');
        $this->session->set_flashdata('show2', '');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Dosen/bkd/'.$tahun);
    }

    public function keKhusus($tahun){
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
        redirect('Dosen/bkd/'.$tahun);
    }

    public function keUpload($tahun){
        
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
        redirect('Dosen/bkd/'.$tahun);
    }

    public function create_kesimpulan($tahun){
            $pendidikan = $this->input->post('pendidikan');
            $penelitian = $this->input->post('penelitian');
            $pengabdian = $this->input->post('pengabdian');
            $penunjang = $this->input->post('penunjang');
            $pd1  = $this->input->post('pd1');
            $pd2 = $this->input->post('pd2');
            $total = $this->input->post('total');
            $id = $this->session->id;
            $data = array(
                'id_dosen' => $id,
                'pendidikan'=> $pendidikan,
                'penelitian' => $penelitian,
                'pengabdian'=> $pengabdian,
                'penunjang' => $penunjang,
                'pd_pl' => $pd1,
                'pg_pj' =>$pd2,
                'total' => $total,
                'masa_pelaksanaan' => $tahun,
                'status' => "0",
            );
           $kes = $this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id, 'masa_pelaksanaan', $tahun);

           if(count($kes)>0){
                    if($this->dbObject->update_general('kesimpulan','id',$kes[0]->id,$data)){
                        $this->session->set_flashdata('notif', 'success');
                        $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                        redirect('Dosen/kesimpulan/'.$tahun);
                    }else{
                        $this->session->set_flashdata('notif', 'error');
                        $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                        redirect('Dosen/kesimpulan/'.$tahun);
                    }
           }else{
                    if($this->dbObject->create_general('kesimpulan',$data)){
                        $this->session->set_flashdata('notif', 'success');
                        $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                        redirect('Dosen/kesimpulan/'.$tahun);
                    }else{
                        $this->session->set_flashdata('notif', 'error');
                        $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                        redirect('Dosen/kesimpulan/'.$tahun);
                    }
           }

    }

    public function kesimpulan($tahun=""){
        $nip = $this->session->namaa;
        $id = $this->session->id;
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
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/kesimpulan',$data);
        $this->load->view('layout/footer');
    }

    public function ubahPass($id,$param=""){
        $nip = $this->session->namaa;
        $id = $this->session->id;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Ubah Password',
            'dosen' => $this->dbObject->get_by_id_general('dosen', 'id', $id),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/ubahPass',$data);
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
                    redirect('Dosen/ubahPass/'.$id);
                }
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Password Tidak Berhasil diubah. Coba Lagi!');
                redirect('Dosen/ubahPass/'.$id);
            }
        }
    }


    public function laporan($param=""){
        $nip = $this->session->namaa;
        $id = $this->session->id;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Laporan Harian Dosen',
            'laporan' => $this->dbObject->get_by_id_general('laporan_dosen', 'id_dosen', $id),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/laporan',$data);
        $this->load->view('layout/footer');
        if($param=="do_create"){
                $waktu = $this->input->post('waktu');
                $kegiatan = $this->input->post('kegiatan');
                $output = $this->input->post('output');
                $volume = $this->input->post('volume');
                $satuan = $this->input->post('satuan');
                $keterangan = $this->input->post('keterangan');
                $tanggal_input = $this->input->post('tanggal_input');
                $data = array(
                    'id_dosen' => $id,
                    'waktu'    => $waktu,
                    'kegiatan' => $kegiatan,
                    'output' => $output,
                    'volume'    => $volume,
                    'satuan' => $satuan,
                    'keterangan' => $keterangan,
                    'tanggal'    => $tanggal_input 
                );

                if($this->dbObject->create_general('laporan_dosen',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Dosen/laporan');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Dosen/laporan');
                }
        }

    }

    public function editLaporan($id, $param=""){
        $nip = $this->session->namaa;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Edit Laporan Harian Dosen',
            'laporan' => $this->dbObject->get_by_id_general('laporan_dosen', 'id', $id),
            'dosfot' => $this->dbObject->get_by_id_general('dosen', 'id', $this->session->id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/editLaporan',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $waktu = $this->input->post('waktu');
            $kegiatan = $this->input->post('kegiatan');
            $output = $this->input->post('output');
            $volume = $this->input->post('volume');
            $satuan = $this->input->post('satuan');
            $keterangan = $this->input->post('keterangan');

            $data = array(
                'waktu'    => $waktu,
                'kegiatan' => $kegiatan,
                'output' => $output,
                'volume'    => $volume,
                'satuan' => $satuan,
                'keterangan' => $keterangan,
            );

            if($this->dbObject->update_general('laporan_dosen','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                redirect('Dosen/laporan');
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                redirect('Dosen/laporan');
            }
        }
    }

    public function hapusLaporan($id){
        if($this->dbObject->delete_general('laporan_dosen','id', $id)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil dihapus!');
            redirect('Dosen/laporan/'.$tahun);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil dihapus!');
            redirect('Dosen/laporan/'.$tahun);
        }
    }

    public function cetakLaporan(){
                $id = $this->session->id;
                $satu = $this->input->post('tanggal_satu');
                $dua  = $this->input->post('tanggal_dua');
                $atasan = $this->input->post('atasan');
                $data = array(
                    'dosen' => $this->dbObject->get_by_id_general('dosen', 'id', $id),
                    'laporan' => $this->dbObject->get_by_id_generalT('laporan_dosen', 'id_dosen', $id, $satu, $dua),
                    'atasan' => $atasan
                );
                $this->load->library('pdf');
                $this->load->view("dosen/cetakLaporan",$data);
                $paper_size  = 'A4'; //paper size
                $orientation = 'landscape'; //tipe format kertas landscape
                $html = $this->output->get_output();

	        $this->pdf->set_paper($paper_size, $orientation);
	        //Convert to PDF
	        $this->pdf->load_html($html);
	        $this->pdf->render();
	        $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	
    }
    

    public function cetakKesimpulan($tahun=""){
        $nip = $this->session->namaa;
        $id = $this->session->id;
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
                $this->load->view("dosen/cetakKesimpulan",$data);
                $paper_size  = 'A4'; //paper size
                $orientation = 'landscape'; //tipe format kertas
                $html = $this->output->get_output();

	        $this->pdf->set_paper($paper_size, $orientation);
	        //Convert to PDF
	        $this->pdf->load_html($html);
	        $this->pdf->render();
	        $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	
    }

    public function cetakBkd($tahun){
        $nip = $this->session->namaa;
        $id = $this->session->id;
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

    public function file($path,$file ){
        // var_dump($file);die;
        force_download('uploads/'.$path.'/'.$file,NULL);
    }

    public function lampiran(){
        $nip = $this->session->namaa;
        $data = array(
            'nip'   => $nip,
            'judul' => "Berkas Lampiran"
        );
        $this->load->view('layout/header', $data);
        $this->load->view('dosen/lampiran', $data);
        $this->load->view('layout/footer');
    }

    public function uploadFile($id, $param=""){
            $config['upload_path']          = './uploads/berkas';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000000;
            // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
            $data = array();
            $this->load->library('upload', $config);
            if($this->upload->do_upload('sptjmD')){
                unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->sptjm_dosen);
                $file = 'berkas/' . $this->upload->data('file_name');
                $data['sptjm_dosen'] = $file;
                   
            }
            if($this->dbObject->update_general('dosen','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
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
                redirect('Dosen/bkd/'.$param);
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
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
                redirect('Dosen/bkd/'.$param);
            }
    }

    public function uploadFile1($id, $param=""){
        $config['upload_path']          = './uploads/berkas';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1000000;
        // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
        $data = array();
        $this->load->library('upload', $config);
        if($this->upload->do_upload('sptjmR')){
            unlink('./uploads/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->sptjm_pimpinan);
            $file = 'berkas/' . $this->upload->data('file_name');
            $data['sptjm_pimpinan'] = $file;
               
        }
        if($this->dbObject->update_general('dosen','id',$id,$data)){
            $this->session->set_flashdata('notif', 'success');
            $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
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
            redirect('Dosen/bkd/'.$param);
        }else{
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
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
            redirect('Dosen/bkd/'.$param);
        }
    }
}
