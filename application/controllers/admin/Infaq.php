<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infaq extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/M_infaq');
	}

	public function index(){
		$data['infaq'] = $this->M_infaq->view_infaq_data()->result();
		$this->load->view('backend/v_infaq', $data);
	}

	public function add(){
		$this->load->view('backend/v_infaq_add');
	}

	public function edit($id){
		$where = array('id_infaq' => $id);
		$data['infaq'] = $this->M_infaq->details_infaq_data($where)->result();
		$this->load->view('backend/v_infaq_edit', $data);
	}

	function exec_add(){
		$date = $this->input->post('date-infaq');
		$category = $this->input->post('category-infaq');
		$total = $this->input->post('number-infaq');
		$info = $this->input->post('text-infaq');

		$data = array(
			'total' => $total,
			'category' => $category,
			'info' => $info,
			'date' => $date
		);
		$this->M_infaq->insert_infaq_data($data);
		redirect('admin/infaq/');
	}

	function delete($id){
		$where = array('id_infaq' => $id);
		$this->M_infaq->delete_infaq_data($where);
		redirect('admin/infaq/');
	}

	function exec_edit(){
		$id = $this->input->post('id-infaq');
		$date = $this->input->post('date-infaq');
		$category = $this->input->post('category-infaq');
		$total = $this->input->post('number-infaq');
		$info = $this->input->post('text-infaq');

		$data = array(
			'total' => $total,
			'category' => $category,
			'info' => $info,
			'date' => $date
		);
	 
		$where = array(
			'id_infaq' => $id
		);
	 
		$this->M_infaq->update_infaq_data($where,$data);
		redirect('admin/infaq/');
	}
}