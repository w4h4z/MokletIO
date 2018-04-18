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
		}else{
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
	
	public function getAccount($id)
	{
		return $this->db->select('*')->from('user_account')->where('ID_SUB',$id)->get()->row();
	}

	public function changePass($id)
	{
		$data = array('USERNAME' => $this->input->post('username'), 
					  'PASSWORD' => md5($this->input->post('password'))
					);

		$this->db->where('ID_SUB', $id)->update('user_account', $data);

		if($this->db->affected_rows() == 0){
			return false;
		} 
		return true;
	}

}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */