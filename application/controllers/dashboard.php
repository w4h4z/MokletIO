<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->model('profile_model');
		$this->load->model('gallery_model');
		$this->load->model('member_model');
		$this->load->model('auth_model');
		$this->load->model('event_model');
	}

	public function index()
	{
		if($this->session->userdata('logged')){
			redirect('dashboard/profile');
		} else {
			redirect('auth');
		}
	}

	public function newMember()
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['member'] = $this->member_model->getNewMember($id);
			$data['main_view'] = 'adm_new_member_view';
			$data['sub'] = $this->dashboard_model->getSubById($id);
			$data['account'] = $this->auth_model->getAccount($id);
			$this->load->view('adm_template', $data);
		} else {
			redirect('auth');
		}
	}

	public function listMember()
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['member'] = $this->member_model->getMember($id);
			$data['main_view'] = 'adm_member_view';
			$data['sub'] = $this->dashboard_model->getSubById($id);
			$data['account'] = $this->auth_model->getAccount($id);
			$this->load->view('adm_template', $data);
		} else {
			redirect('auth');
		}
	}

	public function profile()
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['feature'] = $this->profile_model->feature($id);
			$data['main_view'] = 'adm_profile_view';
			$data['sub'] = $this->dashboard_model->getSubById($id);
			$data['account'] = $this->auth_model->getAccount($id);
			$this->load->view('adm_template', $data);
		} else {
			redirect('auth');
		}
	}

	public function gallery()
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['gallery'] = $this->gallery_model->getGallery($id);
			$data['main_view'] = 'adm_gallery_view';
			$data['sub'] = $this->dashboard_model->getSubById($id);
			$data['account'] = $this->auth_model->getAccount($id);
			$this->load->view('adm_template', $data);
		} else {
			redirect('auth');
		}
		
	}

	public function event()
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['main_view'] = 'adm_event_view';
			$data['sub'] = $this->dashboard_model->getSubById($id);
			$data['account'] = $this->auth_model->getAccount($id);
			$data['event'] = $this->event_model->getEvent($data['sub']->ID_SUB);
			$this->load->view('adm_template', $data);
		} else {
			redirect('auth');
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */