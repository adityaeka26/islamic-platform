<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('backend/M_login');
    }

    public function index() {
        $logged_in = $this->session->userdata('logged_in');
    
        if($logged_in){
            redirect(base_url().'admin/dashboard/'); 
        }

        $this->load->view('backend/v_login');
    }

    public function exec_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array('email' => $email);
        $check_login = $this->m_login->checkLogin($where, $password);
 
        if ($check_login == true) {
            $getuserinfo = $this->m_login->getUserInfo($where)->result();
            
            foreach($getuserinfo as $u){
                $username = $u->username;
                $first_name = $u->first_name;
            }

            $data_session = array(
                'email' => $email,
                'username' => $username,
                'first_name' => $first_name,
                'logged_in' => TRUE
            );

			$this->session->set_userdata($data_session);
            redirect(base_url().'admin/dashboard/'); 
        } else {
            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Email / Password Invalid');
            redirect(base_url().'admin/login/');            
        }
    }
 
    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(base_url().'admin/login/');
    }
}