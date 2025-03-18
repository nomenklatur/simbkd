<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDosen extends CI_Model {
    function get_general($table)
    {
        $query = $this->db->get($table);
                return $query->result();
    }

    public function cek_hadir($val1, $val2){
        $query = $this->db
        ->where('id_pegawai', $val1)
        ->where('tanggal_masuk', $val2)
        ->count_all_results('daftar_hadir');
        if($query < 1){
            return true;
        }else{
            return false;
        }
    }
    public function cek_skp($val1){
        $query = $this->db
        ->where('id_pegawai', $val1)
        ->count_all_results('data_skp');
        if($query < 1){
            return true;
        }else{
            return false;
        }
    }

    
    public function jml_tugas($val1){
        $query = $this->db
        ->where('tambah', $val1)
        ->count_all_results('sasarankerja');
        return $query;
    }
    public function cek_hadir_results($val1, $val2){
        $query = $this->db
        ->where('id_pegawai', $val1)
        ->where('tanggal_masuk', $val2)
        ->get('daftar_hadir');
        return $query->result();
    }
    function get_general_order1($table) //untuk ngambil tahun ajaran.
    {
        $query = $this->db
                ->order_by('id', 'DESC')
                ->get($table);
                return $query->result();
    }
    function get_general_order($table)
    {
        $query = $this->db
                ->order_by('tanggal_masuk', 'DESC')
                ->get($table);
                return $query->result();
    }

    function get_by_id_general($table, $id, $val)
    {
        $query = $this->db->where($id, $val)->get($table);
                return $query->result();
    }
    function get_by_id_generalT($table, $id, $val, $t1, $t2)
    {
        $query = $this->db
        ->where("tanggal BETWEEN '$t1' AND '$t2'")
        ->where($id, $val)
        ->get($table);
                return $query->result();
    }
    function get_by_id_general1($table, $id, $val,$id1, $val1)
    {
        $query = $this->db
        ->where($id, $val)
        ->where($id1, $val1)
        ->get($table);
                return $query->result();
    }

    function get_by_id_general_order($table, $id, $val){
        $query = $this->db->where($id, $val)
            ->order_by('id', 'DESC')
            ->get($table);
                return $query->result();
    }

    function get_by_role_general($table, $id, $val)
    {
        $query = $this->db->where($id, $val)->get($table);
                return $query->row();
    }

    function create_general($table, $data)
        {
                return $this->db->insert($table, $data);
        }

    function update_general($table, $id, $val, $data)
        {
                $this->db->where($id, $val);
                return $this->db->update($table, $data);
        }

    function delete_general($table, $id, $val)
        {
                $this->db->where($id, $val);
                return $this->db->delete($table);
        }
    
    function cekBatasSks($id, $tahun){
        $this->db->select_sum('sks_capaian');
        $this->db->from('bkd_pendidikan');
        $this->db->where('id_dosen', $id);
        $this->db->where('masa_pelaksaan', $tahun);
        $sksPendidikan = $this->db->get()->row()->sks_capaian;
        $this->db->select_sum('sks_capaian');
        $this->db->from('bkd_penelitian');
        $this->db->where('id_dosen', $id);
        $this->db->where('masa_pelaksaan', $tahun);
        $sksPenelitian = $this->db->get()->row()->sks_capaian;
        $total = $sksPendidikan + $sksPenelitian;
        return $total;
    }

}