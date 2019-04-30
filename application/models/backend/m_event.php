<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_event extends CI_Model{
	function view_event_data(){
		return $this->db->get('mjd_task');
	}

	function insert_event_data($data){
		$this->db->insert('mjd_task',$data);
    }
    
    function update_event_data($where,$data){
		$this->db->where($where);
		$this->db->update('mjd_task',$data);
	}

	function delete_event_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_task');
	}

	function details_event_data($where){		
		return $this->db->get_where('mjd_task',$where);
	}
}