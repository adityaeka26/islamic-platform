<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends AdminInterface {

	function __construct(){
		parent::__construct();		
		$this->load->model('install/M_mosque');
		$this->load->model('install/M_account');
	}

	public function index(){
		$data['mosque'] = $this->m_mosque->view_mosque_data()->result();
		$this->load->view('backend/v_settings', $data);
		$this->load->view('backend/inc/v_footer_maps.php', $data);
	}

	function exec_edit(){
		$id = $this->input->post('id-mosque');
		$name = $this->input->post('mosque-name');
		$email = $this->input->post('mosque-email');
		$phone = $this->input->post('mosque-phone');
		$address = $this->input->post('mosque-address');
		$city = $this->input->post('mosque-city');
		$province = $this->input->post('mosque-province');
		$country = $this->input->post('mosque-country');
		$postcode = $this->input->post('mosque-postcode');
		$lat = $this->input->post('mosque-latitude');
		$lon = $this->input->post('mosque-longitude');
		$motto = $this->input->post('mosque-motto');
		$slider_pic = $this->input->post('mosque-slider');
		$width = $this->input->post('mosque-width');
		$volume = $this->input->post('mosque-people');
		$about_short = $this->input->post('mosque-about-small');
		$about_long = $this->input->post('mosque-about-long');
		$greeting = $this->input->post('mosque-greeting');
		$greeting_pic = $this->input->post('mosque-greeting-pic');
		$logo = $this->input->post('mosque-logo');

		$data = array(
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'city' => $city,
			'province' => $province,
			'country' => $country,
			'postcode' => $postcode,
			'lat' => $lat,
			'lon' => $lon,
			'motto' => $motto,
			'slider_pic' => $slider_pic,
			'width' => $width,
			'volume' => $volume,
			'about_short' => $about_short,
			'about_long' => $about_long,
			'greeting' => $greeting,
			'greeting_pic' => $greeting_pic,
			'logo' => $logo
		);
	 
		$where = array(
			'id_mosque' => $id
		);
	 
		$this->m_mosque->update_mosque_data($where,$data);
		redirect('admin/settings/');
	}

	public function gallery(){
		$this->load->view('backend/v_gallery');
	}
}