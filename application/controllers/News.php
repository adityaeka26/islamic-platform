<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('frontend/M_mosque_front');
		$this->load->model('frontend/M_news_front');
	}

	public function index(){
		$data['mosque'] = $this->M_mosque_front->view_mosque_data()->result();
		$data['news'] = $this->M_news_front->view_news_data()->result();
		$data['category'] = $this->M_news_front->view_news_category_data()->result();
		$data['controller']=$this->M_news_front; 
		$this->load->view('frontend/v_news', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}

	public function detail(){
		$data['mosque'] = $this->M_mosque_front->view_mosque_data()->result();
		$data['news'] = $this->M_news_front->view_news_data()->result();
		$data['category'] = $this->M_news_front->view_news_category_data()->result();
		$this->load->view('frontend/v_news_detail', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}
}