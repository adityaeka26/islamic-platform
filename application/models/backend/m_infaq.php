<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_infaq extends CI_Model{
	function view_infaq_data(){
		return $this->db->get('mjd_infaq');
	}

	function insert_infaq_data($data){
		$this->db->insert('mjd_infaq',$data);
    }
    
    function update_infaq_data($where,$data){
		$this->db->where($where);
		$this->db->update('mjd_infaq',$data);
	}

	function delete_infaq_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_infaq');
	}

	function details_infaq_data($where){		
		return $this->db->get_where('mjd_infaq',$where);
	}
}