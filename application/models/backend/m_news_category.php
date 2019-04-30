<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_news_category extends CI_Model{
	function view_news_category_data(){
		return $this->db->get('mjd_news_category');
	}

	function insert_news_category_data($data){
		$this->db->insert('mjd_news_category',$data);
    }
    
    function update_news_category_data($where,$data){
		$this->db->where($where);
		$this->db->update('mjd_news_category',$data);
	}

	function delete_news_category_data($where){
		$this->db->where($where);
		$this->db->delete('mjd_news_category');
	}

	function details_news_category_data($where){		
		return $this->db->get_where('mjd_news_category',$where);
	}
}