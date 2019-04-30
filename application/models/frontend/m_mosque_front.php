<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_mosque_front extends CI_Model{
	function view_mosque_data(){
		return $this->db->get('mjd_mosque');
	}

	function count_user_data(){
		$query = $this->db->get('mjd_users');
		return $query->num_rows();
	}

	function count_event_data(){
		$query = $this->db->get('mjd_task');
		return $query->num_rows();
	}

	function count_team_data(){
		$query = $this->db->get('mjd_takmir');
		return $query->num_rows();
	}

	function get_team_name($where){
		$this->db->select('name');
		$this->db->limit(1);
		return $this->db->get_where('mjd_takmir',$where);
	}

	function get_team_data(){
		return $this->db->get('mjd_takmir');
	}
}