<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_users extends CI_Model{
	function view_users_data(){
		return $this->db->get('mjd_jamaah');
	}

	function insert_users_data($data){
		$this->db->insert('mjd_jamaah',$data);
    }
    
    function update_users_data($where,$data){
		$this->db->where($where);
		$this->db->update('mjd_jamaah',$data);
	}

	function delete_users_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_jamaah');
	}

	function details_users_data($where){		
		return $this->db->get_where('mjd_jamaah',$where);
	}
}