<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

	public function index()
	{
		redirect('dashboard/newMember');
	}

	public function addMember()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2000';
		$this->load->library('upload', $config);

		$id = $this->session->userdata('userId');

		if($_FILES['photoMember']['error'] != UPLOAD_ERR_NO_FILE){
			if( $this->upload->do_upload('photoMember')){
				$upload = $this->upload->data();
				$name = $upload['file_name'];
				if($this->member_model->insertMemberPhoto($id,$name) == TRUE){
					$this->session->set_flashdata('success', 'Add data success');
					redirect('dashboard/newMember');
				} else {
					$this->session->set_flashdata('failed', 'Add data failed');
					redirect('dashboard/newMember');
				}
			} else {
				$this->session->set_flashdata('failed', $this->upload->display_errors());
			   	redirect('dashboard/newMember');
			}
		} else {
			if($this->member_model->insertMember($id) == TRUE){
				$this->session->set_flashdata('success', 'Add data success');
				redirect('dashboard/newMember');
			} else {
				$this->session->set_flashdata('failed', 'Add data failed');
				redirect('dashboard/newMember');
			}
		}
		
	}

}

/* End of file member.php */
/* Location: ./application/controllers/member.php */