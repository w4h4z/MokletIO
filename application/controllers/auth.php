<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		if($this->session->userdata('logged') == true){
			redirect('dashboard');
		} else {
			$this->load->view('adm_login_view');
		}
	}

	public function login()
	{
		if($this->input->post('username') == '' || $this->input->post('password') == ''){
			echo 'false';
			return;
		}

		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		if (!$this->auth_model->login($username, $pass)) {
			echo 'false';
			return;
		}

		echo 'true';
		return;
	}

	public function logout()
	{
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('ID_SUB');
		redirect('auth');
	}

	public function changePass()
	{
		$id = $this->session->userdata('userId');
		if($this->auth_model->changePass($id) == true){
			$this->session->set_flashdata('success', 'Edit data success');
			redirect('dashboard/profile');
		} else {
			$this->session->set_flashdata('failed', 'Edit data failed');
			redirect('dashboard/profile');
		}
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */