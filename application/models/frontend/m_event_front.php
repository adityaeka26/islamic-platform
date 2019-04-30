<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_event_front extends CI_Model{
    function view_event_data(){
		  return $this->db->get('mjd_task');
    }

    function view_event_limit_data(){
      $this->db->limit(6);
		  return $this->db->get('mjd_task');
    }
}