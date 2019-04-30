<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Router extends CI_Controller {
    function __construct(){
        parent::__construct();		
        $this->load->model('install/m_mosque');
    }

    public function index(){
        $install_status = $this->m_mosque->view_mosque_data()->result();

        if ($install_status == null) {
            redirect(base_url() . 'install/');
        } else {
            redirect(base_url() . 'home/');
        }
	}
}