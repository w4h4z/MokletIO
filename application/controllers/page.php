<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	public function index()
	{
		
	}

	public function bdi()
	{
		$id=1;
		$data['data'] = $this->dashboard_model->getSubById($id);
		$this->load->view('home_view', $data);
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */