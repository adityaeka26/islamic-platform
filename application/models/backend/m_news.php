<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_news extends CI_Model{
	function view_news_data(){
		return $this->db->get('mjd_news');
	}

	function insert_news_data($data){
		$this->db->insert('mjd_news',$data);
    }
    
    function update_news_data($where,$data){
		$this->db->where($where);
		$this->db->update('mjd_news',$data);
	}

	function delete_news_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_news');
	}

	function details_news_data($where){		
		return $this->db->get_where('mjd_news',$where);
	}
}