<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function getSubById($id)
	{
		return $this->db->where('ID_SUB',$id)->get('sub_organ')->row();
	}

}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */