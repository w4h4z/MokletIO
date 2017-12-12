<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function getNewMember($id)
	{
		return $this->db->select('*')->from('member_sub')->where('STATUS_MEMBER', '0')->where('ID_SUB',$id)->order_by('ID_MEMBER', 'asc')->get()->result();
	}

	public function getMember($id)
	{
		return $this->db->select('*')->from('member_sub')->where('STATUS_MEMBER', '1')->where('ID_SUB',$id)->order_by('ID_MEMBER', 'asc')->get()->result();
	}

	public function insertMemberPhoto($id,$foto)
	{
		$data = array('ID_SUB'			=> $id,
					  'NAMA_MEMBER' 	=> $this->input->post('name'),
					  'ANGKATAN_MEMBER'	=> $this->input->post('angkatan'),
					  'KELAS_MEMBER'	=> $this->input->post('kelas'),
					  'NO_HP_MEMBER'	=> $this->input->post('phone'),
					  'EMAIL_MEMBER'	=> $this->input->post('email'),
					  'ALASAN_MEMBER'	=> $this->input->post('reason'),
					  'FOTO_MEMBER'		=> $foto,
					  'STATUS_MEMBER'	=> '0',
					  'JABATAN_MEMBER'	=> 'Anggota'
					 );

		$this->db->insert('member_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}

	public function insertMember($id)
	{
		$data = array('ID_SUB'			=> $id,
					  'NAMA_MEMBER' 	=> $this->input->post('name'),
					  'ANGKATAN_MEMBER'	=> $this->input->post('angkatan'),
					  'KELAS_MEMBER'	=> $this->input->post('kelas'),
					  'NO_HP_MEMBER'	=> $this->input->post('phone'),
					  'EMAIL_MEMBER'	=> $this->input->post('email'),
					  'ALASAN_MEMBER'	=> $this->input->post('reason'),
					  'STATUS_MEMBER'	=> '0',
					  'JABATAN_MEMBER'	=> 'Anggota'
					 );

		$this->db->insert('member_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}	

	public function deleteNewMember($id)
	{
		$this->db->where('ID_MEMBER', $id)->delete('member_sub');

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}

	public function editNewMember($id)
	{
		$data = array('NAMA_MEMBER' 	=> $this->input->post('name'),
					  'ANGKATAN_MEMBER'	=> $this->input->post('angkatan'),
					  'KELAS_MEMBER'	=> $this->input->post('kelas'),
					  'NO_HP_MEMBER'	=> $this->input->post('phone'),
					  'EMAIL_MEMBER'	=> $this->input->post('email'),
					  'ALASAN_MEMBER'	=> $this->input->post('reason'),
					 );

		$this->db->where('ID_MEMBER', $id)->update('member_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}

	public function editNewMemberPhoto($id,$photo)
	{
		$data = array('NAMA_MEMBER' 	=> $this->input->post('name'),
					  'ANGKATAN_MEMBER'	=> $this->input->post('angkatan'),
					  'KELAS_MEMBER'	=> $this->input->post('kelas'),
					  'NO_HP_MEMBER'	=> $this->input->post('phone'),
					  'EMAIL_MEMBER'	=> $this->input->post('email'),
					  'ALASAN_MEMBER'	=> $this->input->post('reason'),
					  'FOTO_MEMBER'		=> $photo,
					 );

		$this->db->where('ID_MEMBER', $id)->update('member_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}	

	public function approveMember($id)
	{
		$data = array('STATUS_MEMBER' => '1', 'JABATAN_MEMBER' => $this->input->post('tittle'));
		$this->db->where('ID_MEMBER', $id)->update('member_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}

}

/* End of file member_model.php */
/* Location: ./application/models/member_model.php */