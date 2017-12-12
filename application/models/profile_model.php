<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function feature($id)
	{
		return $this->db->select('*')->from('feature')->where('ID_SUB', $id)->get()->result();
	}

	public function editProfileUpload($id, $headerPhoto, $logoPhoto)
	{
		$data = array('NAMA_SUB' 		=> $this->input->post('fullName'), 
					  'SINGKATAN_SUB' 	=> $this->input->post('acronymName'),
					  'DESC_SUB' 		=> $this->input->post('descSub'),
					  'FOTO_HEADER_SUB' => $headerPhoto,
					  'LOGO_SUB' 		=> $logoPhoto,
					  'PRIMARY_COLOR' 	=> $this->input->post('primaryCol'),
					  'SECONDARY_COLOR' => $this->input->post('secondaryCol')
					);

		$this->db->where('ID_SUB', $id)->update('sub_organ', $data);

		if($this->db->affected_rows() == 0){
			return false;
		}	
		return true;
	}	

	public function editProfileHeader($id, $headerPhoto)
	{
		$data = array('NAMA_SUB' 		=> $this->input->post('fullName'), 
					  'SINGKATAN_SUB' 	=> $this->input->post('acronymName'),
					  'DESC_SUB' 		=> $this->input->post('descSub'),
					  'FOTO_HEADER_SUB' => $headerPhoto,
					  'PRIMARY_COLOR' 	=> $this->input->post('primaryCol'),
					  'SECONDARY_COLOR' => $this->input->post('secondaryCol')
					);

		$this->db->where('ID_SUB', $id)->update('sub_organ', $data);

		if($this->db->affected_rows() == 0){
			return false;
		}	
		return true;
	}

	public function editProfileLogo($id, $logoPhoto)
	{
		$data = array('NAMA_SUB' 		=> $this->input->post('fullName'), 
					  'SINGKATAN_SUB' 	=> $this->input->post('acronymName'),
					  'DESC_SUB' 		=> $this->input->post('descSub'),
					  'LOGO_SUB' 		=> $logoPhoto,
					  'PRIMARY_COLOR' 	=> $this->input->post('primaryCol'),
					  'SECONDARY_COLOR' => $this->input->post('secondaryCol')
					);

		$this->db->where('ID_SUB', $id)->update('sub_organ', $data);

		if($this->db->affected_rows() == 0){
			return false;
		}	
		return true;
	}

	public function editProfile($id)
	{
		$data = array('NAMA_SUB' 		=> $this->input->post('fullName'), 
					  'SINGKATAN_SUB' 	=> $this->input->post('acronymName'),
					  'DESC_SUB' 		=> $this->input->post('descSub'),
					  'PRIMARY_COLOR' 	=> $this->input->post('primaryCol'),
					  'SECONDARY_COLOR' => $this->input->post('secondaryCol')
					);

		$this->db->where('ID_SUB', $id)->update('sub_organ', $data);

		if($this->db->affected_rows() == 0){
			return false;
		}	
		return true;
	}

	public function editFeature($id)
	{
		$data = array('NAMA_FEATURE' => $this->input->post('name'), 
					  'DESC_FEATURE' => $this->input->post('desc'),
					  'ICON_FEATURE' => $this->input->post('icon')
					);

		$this->db->where('ID_FEATURE', $id)->update('feature', $data);

		if($this->db->affected_rows() == 0){
			return false;
		}	
		return true;
	}

}

/* End of file profile_model.php */
/* Location: ./application/models/profile_model.php */