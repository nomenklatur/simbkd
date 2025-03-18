<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model {
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

    public function cek_dosen($val1,$val2){
        $query = $this->db
        ->where('id_dosen', $val1)
        ->where('masa_sk', $val2)
        ->count_all_results('sk');
        if($query < 1){
            return true;
        }else{
            return false;
        }
    }
    function get_general_order($table)
    {
        $query = $this->db
                ->order_by('id', 'DESC')
                ->get($table);
                return $query->result();
    }

    function get_general_order1($table, $val)
    {
        $query = $this->db
                ->order_by($val, 'DESC')
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
        ->where($id, $val)
        ->where("tanggal BETWEEN '$t1' AND '$t2'")
        ->get($table);
                return $query->result();
    }
    function get_by_id_general2($table, $id, $val,$id1, $val1, $id2, $val2)
    {
        $query = $this->db
        ->where($id, $val)
        ->where($id1, $val1)
        ->where($id2, $val2)
        ->get($table);
                return $query->result();
    }

    function get_by_date($jam,$date){
        $query = $this->db
        ->where('tanggal_masuk', $date)
        ->where($jam.'!=', null)
        ->count_all_results('daftar_hadir');
        return $query;
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

    function update_general_two($table, $id, $val,$id1, $val1, $data)
        {
                $this->db->where($id, $val);
                $this->db->where($id1, $val1);
                return $this->db->update($table, $data);
        }
    public function cek_data_skp($val1, $val2, $table){
            $query = $this->db
            ->where('id_pegawai', $val1)
            ->where('id_penilai', $val2)
            ->get($table);
            return $query->result();
        }
    public function jml_tugas($val1){
            $query = $this->db
            ->where('tambah', $val1)
            ->count_all_results('sasarankerja');
            return $query;
        }
    function delete_general($table, $id, $val)
        {
                $this->db->where($id, $val);
                return $this->db->delete($table);
        }
    function get_laporanH_range($val1, $val2){
            $query = $this->db->query("SELECT * FROM laporan_dosen WHERE tanggal BETWEEN '$val1' AND '$val2'");
            return $query->result();
    }
    function get_general_order2($table)
    {
        $query = $this->db
                ->order_by('id', 'DESC')
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
}