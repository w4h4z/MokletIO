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


	public function getAnggotaAbout($id_sub){
		return $this->db->where('member_sub.ID_SUB', $id_sub)
						->where('member_sub.JABATAN_MEMBER !=', 'Anggota')
						->limit(5)
						->get('member_sub')
						->result();
	}

	public function getEvent($id_sub)
	{
		$this->db->select('*')->from('event_sub')
							  ->where('ID_SUB', $id_sub)
							  ->order_by('TANGGAL_EVENT', 'DESC')
							  ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL');


		return $this->db->get()->row();
	}


	public function getJumlahAnggota($id_sub)
	{		
		return $this->db->where('ID_SUB',$id_sub)->count_all_results('member_sub');
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

	public function getLast3Event($id)
	{
		return $this->db->select('*')
				 ->from('event_sub')
				 ->join('sub_organ', 'sub_organ.ID_SUB=event_sub.ID_SUB')
				 ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL')
				 ->where('sub_organ.ID_SUB', $id)
				 ->ORDER_BY('event_sub.ID_EVENT','DESC')
				 ->LIMIT(3, 1)
				 ->get()
				 ->result();
	}

	public function getDetailEvent($id_event)
	{
		return $this->db->where('ID_EVENT', $id_event)->get('detail_event')->row();	
	}




		/* BELOW IS METHOD FOR HOME OF MOKLETIO*/





	public function getAllEvent()
	{
		return $this->db->select('*')->from('event_sub')
								  ->limit(2)
								  ->order_by('TANGGAL_EVENT', 'DESC')
								  ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL')
								  ->get()
								  ->result();
	}

	public function getAllGallery($start)
	{
		$limit	= 9;
		//$gal = $this->db->get('gallery_sub')->result();
		 return $gal = $this->db->select('*')
		 				->from('gallery_sub')
		 				->join('sub_organ','sub_organ.ID_SUB=gallery_sub.ID_SUB')
		 				->limit($limit,$start)
						->order_by('ID_GAL', 'DESC')
						->get()
						->result();

	
	}

	public function getJumlahAllGallery()
	{		
		return $this->db->count_all('gallery_sub');
	}

	public function getAllLast3Event()
	{
		return $this->db->select('*')
				 ->from('event_sub')
				 ->join('sub_organ', 'sub_organ.ID_SUB=event_sub.ID_SUB')
				 ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL')
				 ->ORDER_BY('event_sub.ID_EVENT','DESC')
				 ->LIMIT(3, 1)
				 ->get()
				 ->result();
	}


	public function addMember($data)
	{
		$this->db->insert('member_sub', $data);
		return $this->db->insert_id();
	}

	public function insertMember($foto)
	{
		$data = array(
					'ID_SUB' => $this->input->post('id_sub'),
					'NAMA_MEMBER' => $this->input->post('nama_member'),
					'ANGKATAN_MEMBER' => $this->input->post('angkatan_member'),
					'KELAS_MEMBER' => $this->input->post('kelas_member'),
					'NO_HP_MEMBER' => $this->input->post('no_hp_member'),
					'EMAIL_MEMBER' => $this->input->post('email_member'),
					'ALASAN_MEMBER' => $this->input->post('alasan_member'),
					'FOTO_MEMBER' => $foto,
					'JABATAN_MEMBER' => 'Anggota',
					'STATUS_MEMBER'	=> '0'
				);

		$this->db->insert('member_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		}

		return true;
	}


	public function sendMailBugReport($data){
			$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'ezaalfandy.ea@gmail.com', // change it to yours
			  'smtp_pass' => 'ezaalfandy.ea', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE,
			);
		$this->load->library('email', $config);
		$this->email->from('miftakhul_alfandy_24rpl@student.smktelkom-mlg.sch.id');
		$this->email->to('miftakhul_alfandy_24rpl@student.smktelkom-mlg.sch.id');
		$this->email->set_newline("\r\n");
		$this->email->subject('Bug Report ->'.$this->input->post('masalah'));
		$this->email->message($this->input->post('deskripsi'));
		$this->email->attach('./upload/bugImageTemp/'.$data);

		if ($this->email->send() == TRUE) {
			$this->email->clear(TRUE);
			unlink('./uploads/bugImageTemp/'.$data);
			return TRUE;
		}else{
			$this->email->clear(TRUE);
			unlink('./uploads/bugImageTemp/'.$data);
			return FALSE;
		}
	}
}

/* End of file frontend_model.php */
/* Location: ./application/models/frontend_model.php */