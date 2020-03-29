<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_dashboard extends MX_Controller {

	function __construct(){
		parent::__construct();
		
        if (!$this->session->userdata('logged')) {            
            $this->session->set_flashdata('message','Silahkan login untuk memulai!');
            $this->session->set_flashdata('error','animated headShake red-box');
            //$this->index();
            redirect('login');
        }
	}
	public function index()
	{
		$data = array(
			"site" => $_SERVER['SERVER_NAME'],
			"page" => "Dashboard",
		);
		$this->load->view('layout/admin/header', $data);
		$this->load->view('v_dashboard');
		$this->load->view('layout/admin/footer');
	}
}
