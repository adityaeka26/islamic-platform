<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('frontend/M_mosque_front');
		$this->load->model('frontend/M_news_front');
		$this->load->model('frontend/M_event_front');
	}

	public function index(){
		$data['mosque'] = $this->m_mosque_front->view_mosque_data()->result();
		$data['cnt_usr'] = $this->m_mosque_front->count_user_data();
		$data['cnt_evt'] = $this->m_mosque_front->count_event_data();
		$data['cnt_tem'] = $this->m_mosque_front->count_team_data();
		$where_lead = array('position' => 'Ketua');
		$where_serc = array('position' => 'Sekertaris');
		$where_bdrh = array('position' => 'Bendahara');
		$data['lead'] = $this->m_mosque_front->get_team_name($where_lead)->result();
		$data['secr'] = $this->m_mosque_front->get_team_name($where_serc)->result();
		$data['bdrh'] = $this->m_mosque_front->get_team_name($where_bdrh)->result();
		$data['news'] = $this->m_news_front->view_news_limit_data()->result();
		$data['event'] = $this->m_event_front->view_event_limit_data()->result();
		$this->load->view('frontend/v_home', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}
}
