<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_model extends CI_Model {

	public function login()
	{
		$query = $this->db->where('USERNAME_SUPER', $this->input->post('username'))
						 ->where('PASSWORD_SUPER', $this->input->post('password'))
						 ->get('SUPER_USER');


		if ($this->db->affected_rows() == 0) {

			return false;

		}else{

			$admin = $query->row_array();
			$session = array(
					'logged' 	=> true,
					'super_id'	=> $admin['ID_SUPER'],
					'type' 	=> 'super',
					'username'	=> $admin['USERNAME_SUPER'] 
			);
			$this->session->set_userdata($session);

			return true;
		}

		

	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

}

/* End of file Super_model.php */
/* Location: ./application/models/Super_model.php */