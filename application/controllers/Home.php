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
		$data['mosque'] = $this->M_mosque_front->view_mosque_data()->result();
		$data['cnt_usr'] = $this->M_mosque_front->count_user_data();
		$data['cnt_evt'] = $this->M_mosque_front->count_event_data();
		$data['cnt_tem'] = $this->M_mosque_front->count_team_data();
		$where_lead = array('position' => 'Ketua');
		$where_serc = array('position' => 'Sekertaris');
		$where_bdrh = array('position' => 'Bendahara');
		$data['lead'] = $this->M_mosque_front->get_team_name($where_lead)->result();
		$data['secr'] = $this->M_mosque_front->get_team_name($where_serc)->result();
		$data['bdrh'] = $this->M_mosque_front->get_team_name($where_bdrh)->result();
		$data['news'] = $this->M_news_front->view_news_limit_data()->result();
		$data['event'] = $this->M_event_front->view_event_limit_data()->result();
		$this->load->view('frontend/v_home', $data);
		$this->load->view('frontend/inc/v_footer', $data);
	}
}
