<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends AdminInterface {
	function __construct(){
		parent::__construct();		
		$this->load->model('install/M_account');
	}

	public function index(){
		$data['account'] = $this->M_account->view_admin_account()->result();
		$this->load->view('backend/v_account', $data);
	}

	function exec_edit(){
		$id = $this->input->post('id-account');
		$first_name = $this->input->post('account-name-first');
		$last_name = $this->input->post('account-name-last');
		$email = $this->input->post('account-email');
		$phone = $this->input->post('account-phone');
		$address = $this->input->post('account-address');
		$city = $this->input->post('account-city');
		$province = $this->input->post('account-province');
		$country = $this->input->post('account-country');
		$postcode = $this->input->post('account-postcode');

		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'city' => $city,
			'province' => $province,
			'country' => $country,
			'postcode' => $postcode
		);
	 
		$where = array(
			'id_users' => $id
		);
	 
		$this->M_account->update_admin_account($where, $data);
		redirect('admin/account/');
	}
}