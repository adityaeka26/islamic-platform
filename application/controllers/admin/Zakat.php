<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/m_zakat');
	}

	public function index(){
		$data['zakat'] = $this->m_zakat->view_zakat_data()->result();
		$this->load->view('backend/v_zakat', $data);
	}

	public function fitrah(){
		$this->load->view('backend/v_zakat_fitrah');
	}

	public function mal(){
		$this->load->view('backend/v_zakat_mal');
	}

	function exec_add(){
		$name = $this->input->post('name-zakat');
		$category = $this->input->post('category-zakat');
		$total = $this->input->post('number-zakat');
		$info = $this->input->post('text-zakat');

		$data = array(
			'name' => $name,
			'category' => $category,
			'total' => $total,
			'info' => $info,
			'date_insert' => date('Y-m-d H:i:s')
		);
		$this->m_zakat->insert_zakat_data($data);
		redirect('admin/zakat/');
	}

	function delete($id){
		$where = array('id_zakat' => $id);
		$this->m_zakat->delete_zakat_data($where);
		redirect('admin/zakat/');
	}
}