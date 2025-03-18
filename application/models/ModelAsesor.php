<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAsesor extends CI_Model {
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
    function get_general_order1($table)
    {
        $query = $this->db
                ->order_by('id', 'DESC')
                ->get($table);
                return $query->result();
    }
    public function cek_ppk($val1, $val2, $table){
        $query = $this->db
        ->where('id_pegawai', $val1)
        ->where('id_penilai', $val2)
        ->count_all_results($table);
        if($query < 1){
            return true;
        }else{
            return false;
        }
    }

    function get_by_id_general1($table, $id, $val,$id1, $val1)
    {
        $query = $this->db
        ->where($id, $val)
        ->where($id1, $val1)
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
    public function jml_tugas($val1){
        $query = $this->db
        ->where('tambah', $val1)
        ->count_all_results('sasarankerja');
        return $query;
    }
    public function cek_data_skp($val1, $val2, $table){
        $query = $this->db
        ->where('id_pegawai', $val1)
        ->where('id_penilai', $val2)
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

}