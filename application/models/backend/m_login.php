<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function checkLogin($where, $password) {
        $query =$this->db->get_where('mjd_users',$where);
        
        foreach($query->result() as $u){
            $email=$u->email;
            $password_db=$u->password;
            $salt=$u->salt;
        }

        $password_modif = hash('sha256', $password . $salt);

        if ($password_db == $password_modif) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserInfo($where) {
        return $query =$this->db->get_where('mjd_users',$where);
    }
}