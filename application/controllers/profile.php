<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
	}

	public function index()
	{
		redirect('dashboard/profile');
	}

	public function editProfile()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2000';
		$this->load->library('upload', $config);

		$id = $this->session->userdata('userId');

		if($_FILES['headerPhoto']['error'] != UPLOAD_ERR_NO_FILE){
			if( $this->upload->do_upload('headerPhoto')){
				$uploadHeader = $this->upload->data();
				$nameHeader = $uploadHeader['file_name'];
				if($this->profile_model->editProfileHeader($id, $nameHeader) == TRUE){
					$this->session->set_flashdata('success', 'Edit data success');
					redirect('dashboard/profile');
				} else {
					$this->session->set_flashdata('failed', 'Edit data failed');
					redirect('dashboard/profile');
				}
			} else {
				$this->session->set_flashdata('failed', $this->upload->display_errors());
		    	redirect('dashboard/profile');
			}
		}

		if($_FILES['logoPhoto']['error'] != UPLOAD_ERR_NO_FILE){
			if( $this->upload->do_upload('logoPhoto')){
				$uploadLogo = $this->upload->data();
				$nameLogo = $uploadLogo['file_name'];
				if($this->profile_model->editProfileLogo($id, $nameLogo) == TRUE){
					$this->session->set_flashdata('success', 'Edit data success');
					redirect('dashboard/profile');
				} else {
					$this->session->set_flashdata('failed', 'Edit data failed');
					redirect('dashboard/profile');
				}
			} else {
				$this->session->set_flashdata('failed', $this->upload->display_errors());
		    	redirect('dashboard/profile');
			}
		}

		if($_FILES['headerPhoto']['error'] == UPLOAD_ERR_NO_FILE && $_FILES['logoPhoto']['error'] == UPLOAD_ERR_NO_FILE){
			if($this->profile_model->editProfile($id) == TRUE){
				$this->session->set_flashdata('success', 'Edit data success');
				redirect('dashboard/profile');
			} else {
				$this->session->set_flashdata('failed', 'Edit data failed');
				redirect('dashboard/profile');
			}
		}

		if($_FILES['headerPhoto']['error'] != UPLOAD_ERR_NO_FILE && $_FILES['logoPhoto']['error'] != UPLOAD_ERR_NO_FILE){
			if($this->upload->do_upload('headerPhoto')){
				$uploadHeader = $this->upload->data();
				$nameHeader = $uploadHeader['file_name'];
				if( $this->upload->do_upload('logoPhoto')){
					$uploadLogo = $this->upload->data();
					$nameLogo = $uploadLogo['file_name'];
					if($this->profile_model->editProfileUpload($id, $nameHeader, $nameLogo) == TRUE){
						$this->session->set_flashdata('success', 'Edit data success');
						redirect('dashboard/profile');
					} else {
						$this->session->set_flashdata('failed', 'Edit data failed');
						redirect('dashboard/profile');
					}
				} else {
					$this->session->set_flashdata('failed', $this->upload->display_errors());
			    	redirect('dashboard/profile');
				}
			} else {
				$this->session->set_flashdata('failed', $this->upload->display_errors());
			    redirect('dashboard/profile');
			}
		}

		/*if($this->upload->do_upload('headerPhoto')){
			$uploadHeader = $this->upload->data();
			$nameHeader = $uploadHeader['file_name'];
			if( $this->upload->do_upload('logoPhoto')){
				$uploadLogo = $this->upload->data();
				$nameLogo = $uploadLogo['file_name'];
				if($this->profile_model->editProfile($id, $nameHeader, $nameLogo) == TRUE){
					$this->session->set_flashdata('success', 'Edit data success');
					redirect('dashboard/profile');
				} else {
					$this->session->set_flashdata('failed', 'Edit data failed');
					redirect('dashboard/profile');
				}
			} else {
				$this->session->set_flashdata('failed', $this->upload->display_errors());
		    	redirect('dashboard/profile');
			}
		} else {
			$this->session->set_flashdata('failed', $this->upload->display_errors());
		    redirect('dashboard/profile');
		}*/
	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */