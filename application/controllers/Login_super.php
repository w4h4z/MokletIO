<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_super extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('super_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('type') == "super") {
			redirect('Super');
		}else{
			$this->load->view('super/super_login');
		}
		
	}

	public function login()
	{
		if ($this->super_model->login() == TRUE) {
			echo json_encode(array("status" => TRUE, "nama" => $this->session->userdata('username')));
		}else{
			echo json_encode(array("status" => FALSE));
		}
	}

	public function logout()
	{
		if ($this->super_model->logout() == TRUE) {
			echo json_encode(array("status" => TRUE));
		}else{
			echo json_encode(array("status" => FALSE));
		}
	}

}

/* End of file Login_super.php */
/* Location: ./application/controllers/Login_super.php */