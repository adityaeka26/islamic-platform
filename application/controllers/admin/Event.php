<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/M_event');
	}

	public function index(){
		$data['event'] = $this->m_event->view_event_data()->result();
		$this->load->view('backend/v_event', $data);
	}

	public function add(){
		$this->load->view('backend/v_event_add');
	}

	public function edit($id){
		$where = array('id_task' => $id);
		$data['event'] = $this->m_event->details_event_data($where)->result();
		$this->load->view('backend/v_event_edit', $data);
	}

	function exec_add(){
		$title = $this->input->post('title-event');
		$date = $this->input->post('date-event');
		$people = $this->input->post('people-event');
		$information = $this->input->post('text-event');

		$data = array(
			'title' => $title,
			'people' => $people,
			'information' => $information,
			'date' => $date
		);
		$this->m_event->insert_event_data($data);
		redirect('admin/event/');
	}

	function delete($id){
		$where = array('id_task' => $id);
		$this->m_event->delete_event_data($where);
		redirect('admin/event/');
	}

	function exec_edit(){
		$id = $this->input->post('id-event');
		$title = $this->input->post('title-event');
		$date = $this->input->post('date-event');
		$people = $this->input->post('people-event');
		$information = $this->input->post('text-event');

		$data = array(
			'title' => $title,
			'date' => $date,
			'people' => $people,
			'information' => $information
		);
	 
		$where = array(
			'id_task' => $id
		);
	 
		$this->m_event->update_event_data($where,$data);
		redirect('admin/event/');
	}
}