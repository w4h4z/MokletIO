<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('adm_proposal');
	}

}

/* End of file proposal.php */
/* Location: ./application/controllers/proposal.php */