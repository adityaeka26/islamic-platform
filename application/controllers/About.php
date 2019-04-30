<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('frontend/m_mosque_front');
	}

	public function index(){
		$data['mosque'] = $this->m_mosque_front->view_mosque_data()->result();
		$data['team'] = $this->m_mosque_front->get_team_data()->result();
		$this->load->view('frontend/v_about', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}
}