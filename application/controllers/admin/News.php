<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/m_news');
		$this->load->model('backend/m_news_category');
	}
	
	public function index(){
		$data['news'] = $this->m_news->view_news_data()->result();
		$this->load->view('backend/v_news', $data);
	}

	public function add(){
		$data['news_category'] = $this->m_news_category->view_news_category_data()->result();
		$this->load->view('backend/v_news_add', $data);
	}

	public function edit($id){
		$where = array('id_news' => $id);
		$data['news'] = $this->m_news->details_news_data($where)->result();
		$data['news_category'] = $this->m_news_category->view_news_category_data()->result();
		$this->load->view('backend/v_news_edit', $data);
	}

	function exec_add(){
		$title = $this->input->post('title-news');
		$category = $this->input->post('category-news');
		$content = $this->input->post('text-news');

		$data = array(
			'title' => $title,
			'category' => $category,
			'content' => $content,
			'date_insert' => date('Y-m-d H:i:s')
		);
		$this->m_news->insert_news_data($data);
		redirect('admin/news/');
	}

	function delete($id){
		$where = array('id_news' => $id);
		$this->m_news->delete_news_data($where);
		redirect('admin/news/');
	}

	function exec_edit(){
		$id = $this->input->post('id-news');
		$title = $this->input->post('title-news');
		$category = $this->input->post('category-news');
		$content = $this->input->post('text-news');

		$data = array(
			'title' => $title,
			'category' => $category,
			'content' => $content
		);
	 
		$where = array(
			'id_news' => $id
		);
	 
		$this->m_news->update_news_data($where,$data);
		redirect('admin/news/');
	}
}