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
					echo json_encode(array("status" => true));
				} else {
					echo json_encode(array("status" => false, "message" => 1));
				}
			} else {
				echo json_encode(array("status" => false, "message" => $this->upload->display_errors()));
			}
		}

		if($_FILES['logoPhoto']['error'] != UPLOAD_ERR_NO_FILE){
			if( $this->upload->do_upload('logoPhoto')){
				$uploadLogo = $this->upload->data();
				$nameLogo = $uploadLogo['file_name'];
				if($this->profile_model->editProfileLogo($id, $nameLogo) == TRUE){
					echo json_encode(array("status" => true));
				} else {
					echo json_encode(array("status" => false, "message" => 2));
				}
			} else {
				echo json_encode(array("status" => false, "message" => $this->upload->display_errors()));
			}
		}

		if($_FILES['headerPhoto']['error'] == UPLOAD_ERR_NO_FILE && $_FILES['logoPhoto']['error'] == UPLOAD_ERR_NO_FILE){
			if($this->profile_model->editProfile($id) == TRUE){
				echo json_encode(array("status" => true));
			} else {
				echo json_encode(array("status" => false, "message" => 3));
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
						echo json_encode(array("status" => true));
					} else {
						echo json_encode(array("status" => false, "message" => 4));
					}
				} else {
					echo json_encode(array("status" => false, "message" => $this->upload->display_errors()));
				}
			} else {
				echo json_encode(array("status" => false, "message" => $this->upload->display_errors()));
			}
		}
	}

	public function editFeature()
	{
		$id = $this->input->post('id_feature');
		if($this->session->userdata('logged')){
			if($this->profile_model->editFeature($id) == true){
				echo json_encode(array("status" => true, "tes" => "tes"));
			} else {
				echo json_encode(array("status" => false));
			}
		} else {
			redirect('auth');
		}
	}

	public function load_profile() // untuk mereload konten profile setelah edit (sebagai pengganti page resfresh)
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['sub'] = $this->profile_model->getSubById($id);
			echo json_encode($data);
		} else {
			redirect('auth');
		}
	}

	public function load_structure() // untuk mereload konten profile setelah edit (sebagai pengganti page resfresh)
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data['sub'] = $this->profile_model->getSubById($id);
			echo json_encode($data);
		} else {
			redirect('auth');
		}
	}

	public function load_feature() // untuk mereload konten profile setelah edit (sebagai pengganti page resfresh)
	{
		if($this->session->userdata('logged')){
			$id = $this->session->userdata('userId');
			$data= $this->profile_model->feature($id);
			echo json_encode($data);
		} else {
			redirect('auth');
		}
	}



	public function getProfile()
	{	
		if($this->session->userdata('logged')){
			$data = $this->profile_model->getProfile();
			echo json_encode($data);
		} else {
			redirect('auth');
		}
	}

	public function getSpecificFeature()
	{
		if($this->session->userdata('logged')){
			$data = $this->profile_model->getSpecificFeature();
			echo json_encode($data);
		} else {
			redirect('auth');
		}
	}


	public function editStructure()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2000';
		$this->load->library('upload', $config);
		
		if( $this->upload->do_upload('structurePhoto')){
				$uploadStructure = $this->upload->data();
				$name = $uploadStructure['file_name'];
				if($this->profile_model->editStructure($name) == TRUE){
					echo json_encode(array("status" => true));
				} else {
					echo json_encode(array("status" => false));
				}
			} else {
		    	echo json_encode(array("status" => false, "message" => $this->upload->display_errors()));
			}

	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */