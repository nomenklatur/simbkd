<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogin extends CI_Model {

    public function login($var,$val1, $val2, $table){
        $query = $this->db
        ->where($var, $val1)
        ->where('password', md5($val2))
        ->get($table);
        return $query->result();
    }
    public function cek_user($var, $val1, $val2, $table){
        $query = $this->db
        ->where($var, $val1)
        ->where('password', md5($val2))
        ->count_all_results($table);
        if($query > 0){
            return true;
        }else{
            return false;
        }
    }
}