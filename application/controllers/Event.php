<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('frontend/M_mosque_front');
		$this->load->model('frontend/M_event_front');
	}

	public function index(){
		$data['mosque'] = $this->m_mosque_front->view_mosque_data()->result();
		$data['event'] = $this->m_event_front->view_event_data()->result();
		$this->load->view('frontend/v_event', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}

	public function detail(){
		$data['mosque'] = $this->m_mosque_front->view_mosque_data()->result();
		$data['event'] = $this->m_event_front->view_event_data()->result();
		$this->load->view('frontend/v_event', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}
}