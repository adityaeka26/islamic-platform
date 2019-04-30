<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_zakat extends CI_Model{
	function view_zakat_data(){
		return $this->db->get('mjd_zakat');
	}

	function insert_zakat_data($data){
		$this->db->insert('mjd_zakat',$data);
    }

	function delete_zakat_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_zakat');
	}

	function details_zakat_data($where){		
		return $this->db->get_where('mjd_zakat',$where);
	}
}