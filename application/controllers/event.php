<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('event_model');
	}

	public function index()
	{
		redirect('dashboard/event');
	}

	public function addEvent()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2000';
		$this->load->library('upload', $config);

		$idSub = $this->session->userdata('userId');

			if($this->upload->do_upload('photoBanner')){
				$uploadBanner = $this->upload->data();
				$nameBanner = $uploadBanner['file_name'];
				if ($this->upload->do_upload('photoPoster')) {
					$uploadPoster = $this->upload->data();
					$namePoster = $uploadPoster['file_name'];
					if($this->event_model->insertEvent($idSub,$nameBanner,$namePoster) == TRUE){
						$this->session->set_flashdata('success', 'Add data success');
						redirect('dashboard/event');
					} else {
						$this->session->set_flashdata('failed', 'Add data failed');
						redirect('dashboard/event');
					}
				} else {
					$this->session->set_flashdata('failed', $this->upload->display_errors());
				   	redirect('dashboard/event');
				}
			} else {
				$this->session->set_flashdata('failed', $this->upload->display_errors());
			   	redirect('dashboard/event');
			}	
	}

	public function deleteEvent($idDetail,$idEvent)
	{
		if($this->event_model->deleteEvent($idDetail,$idEvent) == true){
			$this->session->set_flashdata('success', 'Delete data success');
			redirect('dashboard/event');
		} else {
			$this->session->set_flashdata('failed', 'Delete data failed');
			redirect('dashboard/event');
		}
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */