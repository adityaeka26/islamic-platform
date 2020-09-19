<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {
	function __construct(){
        parent::__construct();		
		$this->load->model('install/M_mosque');
		$this->load->model('install/M_account');
    }

	public function index(){
		$this->load->view('install/v_install_mosque');
	}

	public function exec_mosque(){
		$this->form_validation->set_rules('mosque-name', 'Mosque Name', 'required');
		$this->form_validation->set_rules('mosque-motto', 'Mosque Motto', 'required');
		$this->form_validation->set_rules('mosque-width', 'Mosque Width', 'required');
		$this->form_validation->set_rules('mosque-people', 'Mosque People', 'required');
		$this->form_validation->set_rules('mosque-about-small', 'Mosque About Small', 'required');
		$this->form_validation->set_rules('mosque-about-long', 'Mosque About Long', 'required');
		$this->form_validation->set_rules('mosque-greeting', 'Mosque Greeting', 'required');

		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('errors', validation_errors());
				redirect(base_url() . 'install/');
		} else {
				$name = $this->input->post('mosque-name');
				$motto = $this->input->post('mosque-motto');
				$width = $this->input->post('mosque-width');
				$volume = $this->input->post('mosque-people');
				$about_short = $this->input->post('mosque-about-small');
				$about_long = $this->input->post('mosque-about-long');
				$greeting = $this->input->post('mosque-greeting');

				$data = [
						'name' => $name, 
						'motto' => $motto, 
						'width' => $width, 
						'volume' => $volume, 
						'about_short' => $about_short, 
						'about_long' => $about_long, 
						'greeting' => $greeting
				];

				$insert_data = $this->m_mosque->insert_mosque_data($data);

				if ($insert_data) {
						$this->session->set_flashdata('msg', 'Successfully Add Mosque Profile!');
						redirect(base_url() . 'install/place/');
				}
		}
	}

	public function place(){
		$data['mosque'] = $this->m_mosque->view_mosque_data()->result();
		$this->load->view('install/v_install_place', $data);
	}

	public function exec_place(){
		$this->form_validation->set_rules('mosque-email', 'Mosque Email', 'required');
		$this->form_validation->set_rules('mosque-phone', 'Mosque Phone', 'required');
		$this->form_validation->set_rules('mosque-address', 'Mosque Address', 'required');
		$this->form_validation->set_rules('mosque-city', 'Mosque City', 'required');
		$this->form_validation->set_rules('mosque-province', 'Mosque Province', 'required');
		$this->form_validation->set_rules('mosque-country', 'Mosque Country', 'required');
		$this->form_validation->set_rules('mosque-postcode', 'Mosque Postcode', 'required');
		$this->form_validation->set_rules('mosque-latitude', 'Mosque Latitude', 'required');
		$this->form_validation->set_rules('mosque-longitude', 'Mosque Longitude', 'required');

		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('errors', validation_errors());
				redirect(base_url() . 'install/place/');
		} else {
				$id = $this->input->post('mosque-id');
				$email = $this->input->post('mosque-email');
				$phone = $this->input->post('mosque-phone');
				$address = $this->input->post('mosque-address');
				$city = $this->input->post('mosque-city');
				$province = $this->input->post('mosque-province');
				$country = $this->input->post('mosque-country');
				$postcode = $this->input->post('mosque-postcode');
				$latitude = $this->input->post('mosque-latitude');
				$longitude = $this->input->post('mosque-longitude');

				$data = [
						'email' => $email, 
						'phone' => $phone, 
						'address' => $address, 
						'city' => $city, 
						'province' => $province, 
						'country' => $country, 
						'postcode' => $postcode,
						'lat' => $latitude, 
						'lon' => $longitude,
						'date_installed' => date('Y-m-d H:i:s')
				];

				$where = array(
					'id_mosque' => $id
				);

				$update_data = $this->m_mosque->update_mosque_data($where,$data);

				if ($update_data) {
						$this->session->set_flashdata('msg', 'Successfully Add Mosque Place!');
						redirect(base_url() . 'install/account/');
				}
		}
	}

	public function account(){
		$this->load->view('install/v_install_account');
	}

	public function exec_account(){
		$this->form_validation->set_rules('username', 'User Username', 'required');
		$this->form_validation->set_rules('email', 'User Email', 'required');
		$this->form_validation->set_rules('password', 'User Password', 'required');
		$this->form_validation->set_rules('first_name', 'User First Name', 'required');
		$this->form_validation->set_rules('last_name', 'User Last Name', 'required');
		$this->form_validation->set_rules('phone', 'User Phone', 'required');
		$this->form_validation->set_rules('address', 'User Address', 'required');
		$this->form_validation->set_rules('city', 'User City', 'required');
		$this->form_validation->set_rules('province', 'User Province', 'required');
		$this->form_validation->set_rules('country', 'User Country', 'required');
		$this->form_validation->set_rules('postcode', 'User Postcode', 'required');

		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('errors', validation_errors());
				redirect(base_url() . 'install/account/');
		} else {
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$random_salt = hash('sha256', uniqid(openssl_random_pseudo_bytes(16), TRUE));
				$password_salt = hash('sha256', $password . $random_salt);
				$first_name = $this->input->post('first_name');
				$last_name = $this->input->post('last_name');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$city = $this->input->post('city');
				$province = $this->input->post('province');
				$country = $this->input->post('country');
				$postcode = $this->input->post('postcode');

				$data = [
						'username' => $username, 
						'email' => $email, 
						'password' => $password_salt, 
						'salt' => $random_salt,
						'first_name' => $first_name, 
						'last_name' => $last_name,
						'phone' => $phone, 
						'address' => $address,
						'city' => $city, 
						'province' => $province, 
						'country' => $country, 
						'postcode' => $postcode,
						'date_joined' => date('Y-m-d H:i:s')
				];

				$insert_data = $this->m_account->insert_admin_account($data);

				if ($insert_data) {
						$this->session->set_flashdata('msg', 'Successfully Add User Account!');
						redirect(base_url() . 'admin/login/');
				}
		}
	}
}