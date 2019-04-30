<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_account extends CI_Model{
	function view_admin_account(){
		return $this->db->get('mjd_users');
	}

	function insert_admin_account($data){
		return $this->db->insert('mjd_users', $data);
	}

	function update_admin_account($where, $data){
		$this->db->where($where);
		return $this->db->update('mjd_users', $data);
	}
	
}