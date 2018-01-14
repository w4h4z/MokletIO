<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_model extends CI_Model {

	public function getIdsub($singkatan_sub)
	{
		return $this->db->where('SINGKATAN_SUB',$singkatan_sub)->get('sub_organ')->row()->ID_SUB;
	}

	public function home(){
		return $this->db->get('sub_organ')->result();
	}

	public function getSubBySingkatan($id_sub)
	{
		return $this->db->where('ID_SUB',$id_sub)->get('sub_organ')->row();
	}

	public function getAnggota($id_sub){
		return $this->db->select('member_sub.NAMA_MEMBER,member_sub.ANGKATAN_MEMBER')
						->from('member_sub')
						->join('sub_organ', 'sub_organ.ID_SUB = member_sub.ID_SUB')
						->where('member_sub.ID_SUB', $id_sub)
						->get()
						->result();
	}
	public function getEvent($id_sub)
	{
		$this->db->select('*')->from('event_sub')
							  ->where('ID_SUB', $id_sub)
							  ->order_by('TANGGAL_EVENT', 'ASC')
							  ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL');


		return $this->db->get()->row();
	}


	public function getJumlahAnggota($id_sub)
	{		
		return $this->db->where('ID_SUB',$id_sub)->count_all('member_sub');
	}

	public function getGallery($start)
	{
		$limit	= 9;
		//$gal = $this->db->get('gallery_sub')->result();
		 return $gal = $this->db->select('*')
		 				->from('gallery_sub')
		 				->join('sub_organ','sub_organ.ID_SUB=gallery_sub.ID_SUB')
						->where('SINGKATAN_SUB',$this->session->userdata('SUB'))
		 				->limit($limit,$start)
						->order_by('ID_GAL', 'DESC')
						->get()
						->result();

	}

	public function getJumlahGallery($id_sub)
	{		
		return $this->db->where('ID_SUB',$id_sub)->count_all_results('gallery_sub');
	}

	public function getFeature($id_sub){
		return $this->db->select('*')->from('feature')->where('ID_SUB', $id_sub)->get()->result();
	}

}

/* End of file frontend_model.php */
/* Location: ./application/models/frontend_model.php */