<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Frontend_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function sub_index()
	{
		$singkatan_sub = $this->uri->segment(3);
		$data['data'] = $this->Frontend_model->getSubBySingkatan($singkatan_sub);
		$data['anggota'] = $this->Frontend_model->getAnggota($singkatan_sub);
		$data['jumlahAnggota'] = $this->Frontend_model->getJumlahAnggota($singkatan_sub);
		$this->load->view('experiment', $data);
	}


}

/* End of file page.php */
/* Location: ./application/controllers/page.php */