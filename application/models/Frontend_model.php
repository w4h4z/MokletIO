<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function home(){
		return $this->db->get('sub_organ')->result();
	}

	public function getSubBySingkatan($singkatan_sub)
	{
		return $this->db->where('SINGKATAN_SUB',$singkatan_sub)->get('sub_organ')->row();
	}

	public function getAnggota($singkatan_sub){
		$id_sub = $this->db->where('SINGKATAN_SUB',$singkatan_sub)->get('sub_organ')->row()->ID_SUB;
		return $this->db->select('member_sub.NAMA_MEMBER,member_sub.ANGKATAN_MEMBER')
						->from('member_sub')
						->join('sub_organ', 'sub_organ.ID_SUB = member_sub.ID_SUB')
						->get()
						->result();
	}

	public function getJumlahAnggota($singkatan_sub)
	{		
		$id_sub = $this->db->where('SINGKATAN_SUB',$singkatan_sub)->get('sub_organ')->row()->ID_SUB;
		return $this->db->where('ID_SUB',$id_sub)->count_all('member_sub');
	}

}

/* End of file frontend_model.php */
/* Location: ./application/models/frontend_model.php */