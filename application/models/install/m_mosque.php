<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_mosque extends CI_Model{
	function view_mosque_data(){
		return $this->db->get('mjd_mosque');
	}

	function insert_mosque_data($data){
		return $this->db->insert('mjd_mosque', $data);
	}

	function update_mosque_data($where,$data){
		$this->db->where($where);
		return $this->db->update('mjd_mosque',$data);
	}
}