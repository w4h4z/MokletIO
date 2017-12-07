<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gallery_model');
	}

	public function index()
	{
		redirect('dashboard/gallery');
	}

	public function uploadGallery()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2000';
		$this->load->library('upload', $config);

		$id = $this->session->userdata('userId');

		$number_of_files_uploaded = count($_FILES['upl_files']['name']);
	    // Faking upload calls to $_FILE
	    for ($i = 0; $i < $number_of_files_uploaded; $i++){
	      $_FILES['userfile']['name']     	= $_FILES['upl_files']['name'][$i];
	      $_FILES['userfile']['type']     	= $_FILES['upl_files']['type'][$i];
	      $_FILES['userfile']['tmp_name'] 	= $_FILES['upl_files']['tmp_name'][$i];
	      $_FILES['userfile']['error']    	= $_FILES['upl_files']['error'][$i];
	      $_FILES['userfile']['size']     	= $_FILES['upl_files']['size'][$i];

	      if ( ! $this->upload->do_upload()){
	        $this->session->set_flashdata('failed', $this->upload->display_errors());
			redirect('dashboard/gallery');
	      } else {
	        $final_files_data = $this->upload->data();
	        // Continue processing the uploaded data
	        $name = $final_files_data['file_name'];
	        $this->gallery_model->insertGallery($id, $name);
	      }
	    }
	    $this->session->set_flashdata('success', 'Add new data success');
		redirect('dashboard/gallery');
	}

	public function deleteGallery($id)
	{
		if($this->gallery_model->deleteGallery($id) == TRUE){
			$this->session->set_flashdata('success', 'Delete data success');
			redirect('dashboard/gallery');
		} else {
			$this->session->set_flashdata('failed', 'Delete data failed');
			redirect('dashboard/gallery');
		}
	}

}

/* End of file gallery */
/* Location: ./application/controllers/gallery */