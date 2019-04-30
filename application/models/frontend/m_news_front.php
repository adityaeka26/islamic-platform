<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_news_front extends CI_Model{
    function view_news_data(){
		return $this->db->get('mjd_news');
    }

    function view_news_limit_data(){
        $this->db->limit(6);
		return $this->db->get('mjd_news');
    }
    
    function view_news_category_data(){
		return $this->db->get('mjd_news_category');
    }
    
    function count_news_data($data){
        $this->db->where('category', $data);
        $query=$this->db->get('mjd_news');
        $result=$query->result();
        $num_rows=$query->num_rows();
		return $num_rows;
	}
}