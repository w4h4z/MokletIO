<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Super_model');
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('type') == "super") {
			$this->load->view('super/super_template');
		}else{
			redirect('Login_super');
		}
	}

	public function forbidden()
	{
		$this->load->view('super/forbidden');
	}


}

/* End of file Super.php */
/* Location: ./application/controllers/Super.php */