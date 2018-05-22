<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('proposal_model');
	}

	public function index()
	{
		redirect('dashboard/proposal');
	}

	public function getProposal()
	{
		$result = $this->proposal_model->getProposal();

		echo json_encode($result);
	}

	public function getDetailProposal($id)
	{
		$result = $this->proposal_model->getDetailProposal($id);

		echo json_encode($result);
	}

	public function insert()
	{
		$config['upload_path'] = './uploads/Proposal/';
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['max_size']  = '10000';
		
		$this->load->library('upload', $config);
		
		$r = array('status' => true, 'error' => '' );

		if ($this->input->post('tittle') == '') {
			$r['status'] = false;
			$r['error'] = 'Tittle cannot be null';
			echo json_encode($r);
			return;
		}

		if ( ! $this->upload->do_upload('fileProposal')){
			$r['error'] = $this->upload->display_errors();
			$r['status'] = false;
			echo json_encode($r);
		} else {
			if ($this->proposal_model->insert($this->upload->data()) == true) {
				echo json_encode($r);
			} else {
				$r['status'] = false;
				echo json_encode($r);
			}
		}
	}

	public function update()
	{
		$r = array('status' => true, 'error' => '' );

		if ($this->input->post('tittle') == '') {
			$r['status'] = false;
			$r['error'] = 'Tittle cannot be null';
			echo json_encode($r);
			return;
		}

		if ($this->proposal_model->update() == true) {
			echo json_encode($r);
		} else {
			$r['status'] = true;
			$r['error'] = 'Nothing Changed!';
			echo json_encode($r);
		}
		
	}

	public function delete($id)
	{
		$r = array('status' => true, 'error' => '' );
		if ($this->proposal_model->delete($id)) {
			echo json_encode($r);
		} else {
			$r['status'] = false;
			echo json_encode($r);
		}
	}

	public function updateFileProposal()
	{
		$config['upload_path'] = './uploads/proposal/';
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['max_size']  = '10000';
		
		$this->load->library('upload', $config);
		
		$r = array('status' => true, 'error' => '' );

		if ( ! $this->upload->do_upload('fileProposal')){
			$r['error'] = $this->upload->display_errors();
			$r['status'] = false;
			echo json_encode($r);
		}
		else{
			if ($this->proposal_model->updateFileProposal($this->upload->data()) == true) {
				echo json_encode($r);
			} else {
				$r['status'] = false;
				echo json_encode($r);
			}
		}
	}

}

/* End of file proposal.php */
/* Location: ./application/controllers/proposal.php */