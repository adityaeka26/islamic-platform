<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_takmir extends CI_Model{
	function view_takmir_data(){
		return $this->db->get('mjd_takmir');
	}

	function insert_takmir_data($data){
		$this->db->insert('mjd_takmir',$data);
    }
    
    function update_takmir_data($where,$data){
		$this->db->where($where);
		$this->db->update('mjd_takmir',$data);
	}

	function delete_takmir_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_takmir');
	}

	function details_takmir_data($where){		
		return $this->db->get_where('mjd_takmir',$where);
	}
}