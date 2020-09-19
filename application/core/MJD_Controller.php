<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MJD_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('install/M_mosque');

        $install_status = $this->M_mosque->view_mosque_data()->result();

        if ($install_status == null) {
            redirect(base_url() . 'install/');
        }
    }
}

class AdminInterface extends MJD_Controller {
    public function __construct() {
        parent::__construct();

        $logged_in = $this->session->userdata('logged_in');

        if ($logged_in) {
            $data['username'] = $this->session->userdata('username');
            $this->load->view('backend/inc/v_header');
            $this->load->view('backend/inc/v_menu',$data);
        } else {
            redirect(base_url() . 'admin/login/');
        }
    }
}
