<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('backend/M_users');
		$this->load->model('install/M_mosque');
	}

	public function index(){
		$data['people'] = $this->M_users->view_users_data()->result();
		$data['people_maps'] = $this->M_users->view_users_data()->result();
		$data['mosque'] = $this->M_mosque->view_mosque_data()->result();
		$this->load->view('backend/v_people', $data);
	}

	public function add(){
		$data['mosque'] = $this->M_mosque->view_mosque_data()->result();
		$this->load->view('backend/v_people_add');
		$this->load->view('backend/inc/v_footer_maps.php', $data);
	}

	public function edit($id){
		$where = array('id_jamaah' => $id);
		$data['people'] = $this->M_users->details_users_data($where)->result();
		$this->load->view('backend/v_people_edit', $data);
		$this->load->view('backend/inc/v_footer_maps_edit.php', $data);
	}

	public function details($id){
		$where = array('id_jamaah' => $id);
		$data['people'] = $this->M_users->details_users_data($where)->result();
		$this->load->view('backend/v_people_details', $data);
	}

	function exec_add(){
		$name = $this->input->post('people-name');
		$email = $this->input->post('people-email');
		$telephone = $this->input->post('people-phone');
		$gender = $this->input->post('people-gender');
		$address = $this->input->post('people-address');
		$city = $this->input->post('people-city');
		$province = $this->input->post('people-province');
		$country = $this->input->post('people-country');
		$postcode = $this->input->post('people-postcode');
		$information = $this->input->post('people-text');
		$lat = $this->input->post('people-latitude');
		$lon = $this->input->post('people-longitude');

		$data = array(
			'name' => $name,
			'email' => $email,
			'telephone' => $telephone,
			'gender' => $gender,
			'address' => $address,
			'city' => $city,
			'province' => $province,
			'country' => $country,
			'postcode' => $postcode,
			'information' => $information,
			'lat' => $lat,
			'lon' => $lon,
			'date_insert' => date('Y-m-d H:i:s')
		);
		$this->M_users->insert_users_data($data);
		redirect('admin/people/');
	}

	function delete($id){
		$where = array('id_jamaah' => $id);
		$this->M_users->delete_users_data($where);
		redirect('admin/people/');
	}

	function exec_edit(){
		$id = $this->input->post('id-people');
		$name = $this->input->post('people-name');
		$email = $this->input->post('people-email');
		$telephone = $this->input->post('people-phone');
		$gender = $this->input->post('people-gender');
		$address = $this->input->post('people-address');
		$city = $this->input->post('people-city');
		$province = $this->input->post('people-province');
		$country = $this->input->post('people-country');
		$postcode = $this->input->post('people-postcode');
		$information = $this->input->post('people-text');
		$lat = $this->input->post('people-latitude');
		$lon = $this->input->post('people-longitude');

		$data = array(
			'name' => $name,
			'email' => $email,
			'telephone' => $telephone,
			'gender' => $gender,
			'address' => $address,
			'city' => $city,
			'province' => $province,
			'country' => $country,
			'postcode' => $postcode,
			'information' => $information,
			'lat' => $lat,
			'lon' => $lon
		);
	 
		$where = array(
			'id_jamaah' => $id
		);
	 
		$this->M_users->update_users_data($where,$data);
		redirect('admin/people/');
	}
}