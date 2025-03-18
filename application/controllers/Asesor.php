<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAsesor', 'dbObject');
        $this->load->helper(array('url','download'));	
        if($this->session->web != "bkd" ||$this->session->namaa == null || $this->session->namaa == "" ||  $this->session->level != 12 ){
            redirect('Welcome/logout');
        }
    }
    
    public function index(){
        $nip = $this->session->nip;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Dashboard',
            'info' => $this->dbObject->get_general('info')
        );
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/index',$data);
        $this->load->view('layout/footer');
    }

    public function bkdDosen(){
        $masabkd = $this->dbObject->get_by_id_general('masa_bkd','id',2);
        $nip = $this->session->nip;
        $id = $this->session->id;
        $sk = $this->dbObject->get_by_id_general('sk', 'asesor1', $id);
        $data = array();
        if(count($sk)>0){
            $k1= $sk;
        }else{
            $k1= array();
        }
        $sk1 = $this->dbObject->get_by_id_general('sk', 'asesor2', $id);
        if(count($sk1)>0){
            $k2= $sk1;
        }else{
            $k2= array();
        }
        // var_dump($this->dbObject->get_by_id_general('tahun', 'status', '1'));die;
        $data = array(
            'nip' => $nip,
            'judul'=> 'BKD Dosen',
            'tahun'=>$this->dbObject->get_general_order1('tahun'),
            'tahun1'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'dosen' => $this->dbObject->get_general('dosen'),
            'asesor1' =>$k1,
            'asesor2' =>$k2,
            'masa' =>$masabkd
        );
        if($masabkd[0]->status == 'Aktif'){
            $views = 'bkdDosen';
        }
        else {
            $views = 'bkdAsesNonAktif';
        }
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/'.$views, $data);
        $this->load->view('layout/footer');
    }

    public function bkd($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $kes = $this->dbObject->get_by_id_general2('kesimpulan_ases1','id_dosen', $id,'masa_pelaksanaan', $tahun, 'id_asesor', $this->session->id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'BKD',
            'id' =>$id,
            'tahunS' => $tahun,
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun),
            'tahun'=>$this->dbObject->get_by_id_general('tahun', 'status', '1'),
            'kesimpulan' => count($kes)
        );
        if($this->session->active1!=""||$this->session->active1!=null ||$this->session->active2!=""||$this->session->active2!=null ||$this->session->active3!=""||$this->session->active3!=null ||$this->session->active4!=""||$this->session->active4!=null ||$this->session->active6!=""||$this->session->active6!=null){
            $this->session->set_flashdata('active', '');
            $this->session->set_flashdata('show', '');
        }else{
            $this->session->set_flashdata('active', 'active');
            $this->session->set_flashdata('show', 'show');
        }
        $this->load->view('layout/header', $data);
        $this->load->view('asesor/bkd',$data);
        $this->load->view('layout/footer');

    }


    public function kePenelitian($id){
        $this->session->set_flashdata('active1', 'active');
        $this->session->set_flashdata('show1', 'show');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Asesor/bkd/'.$id);
    }

    public function kePendidikan($id){
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Asesor/bkd/'.$id);
    }

    public function kePengabdian($id){
        $this->session->set_flashdata('active2', 'active');
        $this->session->set_flashdata('show2', 'show');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Asesor/bkd/'.$id);
    }

    public function kePenunjang($id){
        $this->session->set_flashdata('active3', 'active');
        $this->session->set_flashdata('show3', 'show');
        $this->session->set_flashdata('active2', '');
        $this->session->set_flashdata('show2', '');
        $this->session->set_flashdata('active1', '');
        $this->session->set_flashdata('show1', '');
        $this->session->set_flashdata('active', '');
        $this->session->set_flashdata('show', '');
        redirect('Asesor/bkd/'.$id);
    }

    public function keKhusus($id){
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
        redirect('Asesor/bkd/'.$id);
    }
    public function keUpload($id){
        
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
        redirect('Asesor/bkd/'.$id);
    }
    public function editPendidikan($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $pen = $this->dbObject->get_by_id_general('bkd_pendidikan', 'id', $id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Nilai Pendidikan',
            'pendidikan' => $pen,
        );
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/editPendidikan',$data);
        $this->load->view('layout/footer');

        if($param=="do_edit"){
                $penilaian_asesor = $this->input->post('penilaian_asesor');
                $data = array(
                    'penilaian_asesor' => $penilaian_asesor
                );

                if($this->dbObject->update_general('bkd_pendidikan','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Asesor/bkd/'.$pen[0]->id_dosen);
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active', 'active');
                    $this->session->set_flashdata('show', 'show');
                    redirect('Asesor/bkd/'.$pen[0]->id_dosen);
                }
        }   
    }

    public function editPenelitian($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $pen = $this->dbObject->get_by_id_general('bkd_penelitian', 'id', $id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Nilai Penelitian',
            'penelitian' => $pen,
        );
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/editPenelitian',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $penilaian_asesor = $this->input->post('penilaian_asesor');
            $data = array(
                'penilaian_asesor' => $penilaian_asesor
            );
            if($this->dbObject->update_general('bkd_penelitian','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                $this->session->set_flashdata('active1', 'active');
                $this->session->set_flashdata('show1', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                $this->session->set_flashdata('active1', 'active');
                $this->session->set_flashdata('show1', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }
        }
    }

    public function editPengabdian($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $pen = $this->dbObject->get_by_id_general('bkd_pengabdian', 'id', $id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Nilai Pengabdian',
            'pengabdian' => $pen,
        );
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/editPengabdian',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $penilaian_asesor = $this->input->post('penilaian_asesor');
            $data = array(
                'penilaian_asesor' => $penilaian_asesor
            );
            if($this->dbObject->update_general('bkd_pengabdian','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active2', 'active');
                    $this->session->set_flashdata('show2', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }else{
                $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
                    $this->session->set_flashdata('active2', 'active');
                    $this->session->set_flashdata('show2', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }
        }
    }

    public function editPenunjang($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $pen = $this->dbObject->get_by_id_general('bkd_penunjang', 'id', $id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Nilai Penunjang',
            'penunjang' => $pen,
        );
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/editPenunjang',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $penilaian_asesor = $this->input->post('penilaian_asesor');
            $data = array(
                'penilaian_asesor' => $penilaian_asesor
            );
            if($this->dbObject->update_general('bkd_penunjang','id',$id,$data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                $this->session->set_flashdata('active3', 'active');
                $this->session->set_flashdata('show3', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                $this->session->set_flashdata('active3', 'active');
                $this->session->set_flashdata('show3', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }
        }
    }

    public function editKhusus($id, $param=""){
        $nip = $this->session->nip;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1')[0]->id;
        $pen = $this->dbObject->get_by_id_general('bkd_khusus_prof', 'id', $id);
        $data = array(
            'nip' => $nip,
            'judul'=> 'Nilai Khusus Profesor',
            'khusus' => $pen,
        );
        $this->load->view('layout/header',$data);
        $this->load->view('asesor/editKhusus',$data);
        $this->load->view('layout/footer');
        if($param=="do_edit"){
            $penilaian_asesor = $this->input->post('penilaian_asesor');
            $data = array(
                'penilaian_asesor' => $penilaian_asesor
            );
            if($this->dbObject->update_general('bkd_khusus_prof','id',$id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active4', 'active');
                    $this->session->set_flashdata('show4', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }else{
                $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil diubah!');
                    $this->session->set_flashdata('active4', 'active');
                    $this->session->set_flashdata('show4', 'show');
                redirect('Asesor/bkd/'.$pen[0]->id_dosen);
            }
        }
    }
    public function kesimpulan($id){
        $nip = $this->session->nip;
        $idAs = $this->session->id;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1');
        $data = array(
            'nip' => $nip,
            'judul'=> 'Kesimpulan Dosen',
            'tahun'=>$tahun,
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'kesimpulan' =>$this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id, 'masa_pelaksanaan', $tahun[0]->id),
            'kesimpulan1'=> $this->dbObject->get_by_id_general1('kesimpulan_ases1','id_dosen', $id, 'masa_pelaksanaan', $tahun[0]->id),
            'kesimpulan2'=> $this->dbObject->get_by_id_general1('kesimpulan_ases2','id_dosen', $id, 'masa_pelaksanaan', $tahun[0]->id),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'khusus' => $this->dbObject->get_by_id_general1('bkd_khusus_prof','id_dosen', $id,'masa_pelaksaan', $tahun[0]->id),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('asesor/kesimpulan',$data);
        $this->load->view('layout/footer');
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
            'id_asesor' => $id,
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
       $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1');
       $kes = $this->dbObject->get_by_id_general1('kesimpulan','id_dosen', $id, 'masa_pelaksanaan', $tahun[0]->id);

       if(count($kes)>0){
                if($this->dbObject->update_general('kesimpulan','id',$kes[0]->id,$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    redirect('Dosen/kesimpulan');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    redirect('Dosen/kesimpulan');
                }
       }else{
                if($this->dbObject->create_general('kesimpulan',$data)){
                    $this->session->set_flashdata('notif', 'success');
                    $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                    redirect('Dosen/kesimpulan');
                }else{
                    $this->session->set_flashdata('notif', 'error');
                    $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                    redirect('Dosen/kesimpulan');
                }
       }

}
    public function nilaiKesimpulan($id,$param=""){
        $nip = $this->session->nip;
        $idAs = $this->session->id;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1');
        $sk = $this->dbObject->get_by_id_general2('sk', 'id_dosen', $id,'asesor1', $idAs, 'masa_sk', $tahun[0]->id);
        $sk1 = $this->dbObject->get_by_id_general2('sk', 'id_dosen', $id,'asesor2', $idAs, 'masa_sk', $tahun[0]->id);
        $asesor ="";
        if(count($sk)>0){
            $kesimpulan = $this->dbObject->get_by_id_general2('kesimpulan_ases1', 'id_dosen', $id,'id_asesor',$idAs,'masa_pelaksanaan',$tahun[0]->id);
            $asesor = "1";
            $ska = $sk;
        }else if(count($sk1)>0){
            $kesimpulan = $this->dbObject->get_by_id_general2('kesimpulan_ases2', 'id_dosen', $id,'id_asesor',$idAs,'masa_pelaksanaan',$tahun[0]->id);
            $asesor = "2";
            $ska = $sk1;
        }
        $data = array(
            'nip' => $nip,
            'id' => $id,
            'judul'=> 'Nilai Kesimpulan Dosen',
            'tahun' => $tahun,
            'dosen'=>$this->dbObject->get_by_id_general('dosen', 'id', $id),
            'jenis_dosen' =>$this->dbObject->get_general('jenis_dosen'),
            'pendidikan' => $this->dbObject->get_by_id_general1('bkd_pendidikan', 'id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penelitian' => $this->dbObject->get_by_id_general1('bkd_penelitian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'pengabdian' => $this->dbObject->get_by_id_general1('bkd_pengabdian','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'penunjang' => $this->dbObject->get_by_id_general1('bkd_penunjang','id_dosen', $id, 'masa_pelaksaan', $tahun[0]->id),
            'kesimpulan' => $kesimpulan,
            'asesor' => $asesor
        );
        $this->load->view('layout/header', $data);
        $this->load->view('asesor/nilaiKesimpulan',$data);
        $this->load->view('layout/footer');

        if($param=="do_create"){
            $pendidikan = $this->input->post('pendidikan');
            $ket_pend = $this->input->post('ket_pend');
            $penelitian = $this->input->post('penelitian');
            $ket_pene = $this->input->post('ket_pene');
            $pengabdian = $this->input->post('pengabdian');
            $ket_peng = $this->input->post('ket_peng');
            $penunjang = $this->input->post('penunjang');
            $ket_penun = $this->input->post('ket_penun');
            $akhir = $this->input->post('total');
            $ket_akhir = $this->input->post('ket_akhir');

            $data = array(
                'id_dosen' => $id,
                'id_asesor' => $idAs,
                'pendidikan'=> $pendidikan,
                'keterangan_pend' => $ket_pend,
                'penelitian' => $penelitian,
                'keterangan_pene' => $ket_pene,
                'pengabdian'=> $pengabdian,
                'keterangan_peng' => $ket_peng,
                'penunjang' => $penunjang,
                'keterangan_penun' => $ket_penun,
                'total' => $akhir,
                'keterangan_total' => $ket_akhir,
                'masa_pelaksanaan' => $tahun[0]->id,
            );

            if($asesor=="1"){
                $kes = $this->dbObject->get_by_id_general2('kesimpulan_ases1','id_dosen', $id, 'masa_pelaksanaan', $tahun[0]->id, 'id_asesor', $idAs);
                if(count($kes)>0){
                    if($this->dbObject->update_general('kesimpulan_ases1','id',$kes[0]->id,$data)){
                        $data = array(
                            'nilai' => "1"
                        );
                        $this->dbObject->update_general('sk','id',$ska[0]->id,$data);
                        $this->session->set_flashdata('notif', 'success');
                        $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }else{
                        $this->session->set_flashdata('notif', 'error');
                        $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }
                }else{
                    if($this->dbObject->create_general('kesimpulan_ases1',$data)){
                        $data = array(
                            'nilai' => "1"
                        );
                        $this->dbObject->update_general('sk','id',$ska[0]->id,$data);
                        $this->session->set_flashdata('notif', 'success');
                        $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }else{
                        $this->session->set_flashdata('notif', 'error');
                        $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }
                }
            }else if($asesor=="2"){
                $kes = $this->dbObject->get_by_id_general2('kesimpulan_ases2','id_dosen', $id, 'masa_pelaksanaan', $tahun[0]->id, 'id_asesor', $idAs);
                if(count($kes)>0){
                    if($this->dbObject->update_general('kesimpulan_ases2','id',$kes[0]->id,$data)){
                        $data = array(
                            'nilai1' => "1"
                        );
                        $this->dbObject->update_general('sk','id',$ska[0]->id,$data);
                        $this->session->set_flashdata('notif', 'success');
                        $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }else{
                        $this->session->set_flashdata('notif', 'error');
                        $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }
                }else{
                    if($this->dbObject->create_general('kesimpulan_ases2',$data)){
                        $data = array(
                            'nilai1' => "1"
                        );
                        $this->dbObject->update_general('sk','id',$ska[0]->id,$data);
                        $this->session->set_flashdata('notif', 'success');
                        $this->session->set_flashdata('pesan', 'Data Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }else{
                        $this->session->set_flashdata('notif', 'error');
                        $this->session->set_flashdata('pesan', 'Data Tidak Berhasil ditambah!');
                        redirect('Asesor/nilaiKesimpulan/'.$id);
                    }
                }
            }
        }
    }

    public function cetakNilai($id){
        $nip = $this->session->nip;
        $idAs = $this->session->id;
        $tahun = $this->dbObject->get_by_id_general('tahun', 'status', '1');
        $sk = $this->dbObject->get_by_id_general1('sk', 'id_dosen', $id,'asesor1', $idAs);
        $sk1 = $this->dbObject->get_by_id_general1('sk', 'id_dosen', $id,'asesor2', $idAs);
        $asesor ="";
        if(count($sk)>0){
            $kesimpulan = $this->dbObject->get_by_id_general2('kesimpulan_ases1', 'id_dosen', $id,'id_asesor',$idAs,'masa_pelaksanaan',$tahun[0]->id);
            $asesor = "I";
            $ska = $sk;
        }else if(count($sk1)>0){
            $kesimpulan = $this->dbObject->get_by_id_general2('kesimpulan_ases2', 'id_dosen', $id,'id_asesor',$idAs,'masa_pelaksanaan',$tahun[0]->id);
            $asesor = "II";
            $ska = $sk1;
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
            'as' => $this->dbObject->get_by_id_general('asessor', 'id', $idAs)
        );
        $this->load->library('pdf');
        $this->load->view("asesor/cetakNilai",$data);
        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

    $this->pdf->set_paper($paper_size, $orientation);
    //Convert to PDF
    $this->pdf->load_html($html);
    $this->pdf->render();
    $this->pdf->stream("laporan-harian-dosen.pdf", array('Attachment'=>0));	

    }

    public function ubahPass($id,$param=""){
        $nip = $this->session->nip;
        $id = $this->session->id;
        $data = array(
            'nip' => $nip,
            'judul'=> 'Ubah Password',
            'asesor' => $this->dbObject->get_by_id_general('asessor', 'id', $id)
        );
        $this->load->view('layout/header', $data);
        $this->load->view('asesor/ubahPass',$data);
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
                    redirect('Asesor/ubahPass/'.$id);
                }
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Password Tidak Berhasil diubah. Coba Lagi!');
                redirect('Asesor/ubahPass/'.$id);
            }
        }
    }

    public function file($path,$file ){
        // var_dump($file);die;
        force_download('uploads/'.$path.'/'.$file,NULL);
    }

    public function catatan($id, $asesor){
            $catatan = $this->input->post("catatan");
            if($asesor == 1){
                $data = array(
                    "cat_as1" => $catatan
                );
            }else{
                $data = array(
                    "cat_as2" => $catatan
                );
            }
            if($this->dbObject->update_general('dosen', 'id', $id, $data)){
                $this->session->set_flashdata('notif', 'success');
                $this->session->set_flashdata('pesan', 'Catatan berhasil ditambahkan!');
                redirect('Asesor/nilaiKesimpulan/'.$id);
            }else{
                $this->session->set_flashdata('notif', 'error');
                $this->session->set_flashdata('pesan', 'Catatan tidak berhasil ditambahkan!');
                redirect('Asesor/nilaiKesimpulan/'.$id);
            }
    }

    public function uploadFile1($id){
        $config['upload_path']          = './uploads/berkas';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1000000;
        // $config['file_name']            = "dosen-".date('Y-m-d-H-i-s');
        $data = array();
        $this->load->library('upload', $config);
        if($this->upload->do_upload('pernyataanAs')){
            unlink('./uploads/berkas/'.$this->dbObject->get_by_id_general('dosen', 'id', $id)[0]->foto_dosen);
            $file = 'berkas/' . $this->upload->data('file_name');
            $data['pertnyataan_as'] = $file;
               
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
            redirect('Asesor/bkd/'.$id);
        }else{
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
            $this->session->set_flashdata('notif', 'error');
            $this->session->set_flashdata('pesan', 'Data Tidak Berhasil diubah!');
            redirect('Asesor/bkd/'.$id);
        }
    }
}