<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newscategory extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/m_news_category');
	}

	public function index(){
		$data['news_category'] = $this->m_news_category->view_news_category_data()->result();
		$this->load->view('backend/v_category_news', $data);
	}

	public function add(){
		$this->load->view('backend/v_category_news_add');
	}

	public function edit($id){
		$where = array('id_category' => $id);
		$data['news_category'] = $this->m_news_category->details_news_category_data($where)->result();
		$this->load->view('backend/v_category_news_edit', $data);
	}

	function exec_add(){
		$name = $this->input->post('title-category-news');

		$data = array(
			'name' => $name
		);
		$this->m_news_category->insert_news_category_data($data);
		redirect('admin/newscategory/');
	}

	function delete($id){
		$where = array('id_category' => $id);
		$this->m_news_category->delete_news_category_data($where);
		redirect('admin/newscategory/');
	}

	function exec_edit(){
		$id = $this->input->post('id-category');
		$name = $this->input->post('title-category-news');

		$data = array(
			'name' => $name
		);
	 
		$where = array(
			'id_category' => $id
		);
	 
		$this->m_news_category->update_news_category_data($where,$data);
		redirect('admin/newscategory/');
	}
}