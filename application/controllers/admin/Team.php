<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/m_takmir');
	}

	public function index(){
		$data['team'] = $this->m_takmir->view_takmir_data()->result();
		$this->load->view('backend/v_team', $data);
	}

	public function add(){
		$this->load->view('backend/v_team_add');
	}

	public function edit($id){
		$where = array('id_takmir' => $id);
		$data['team'] = $this->m_takmir->details_takmir_data($where)->result();
		$this->load->view('backend/v_team_edit', $data);
	}

	function exec_add(){
		$name = $this->input->post('team-name');
		$position = $this->input->post('team-position');

		$data = array(
			'name' => $name,
			'position' => $position
		);

		$this->m_takmir->insert_takmir_data($data);
		redirect('admin/team/');
	}

	function delete($id){
		$where = array('id_takmir' => $id);
		$this->m_takmir->delete_takmir_data($where);
		redirect('admin/team/');
	}

	function exec_edit(){
		$id = $this->input->post('id-team');
		$name = $this->input->post('team-name');
		$position = $this->input->post('team-position');

		$data = array(
			'name' => $name,
			'position' => $position,
			'date_insert' => date('Y-m-d H:i:s')
		);
	 
		$where = array(
			'id_takmir' => $id
		);
	 
		$this->m_takmir->update_takmir_data($where,$data);
		redirect('admin/team/');
	}
}