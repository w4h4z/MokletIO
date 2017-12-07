<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login($username,$password)
	{	
		$query = $this->db->where('USERNAME', $username)
						  ->where('PASSWORD', md5($password))
						  ->get('user_account');

		if ($this->db->affected_rows() == 0) {
			return false;
		}

		$admin = $query->row_array();

		$session = array(
				'logged' 	=> true,
				'userId' 	=> $admin['ID_SUB'],
				'username'	=> $admin['USERNAME'] 
		);

		$this->session->set_userdata($session);

		return true;
	}
	

}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */