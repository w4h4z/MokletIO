<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

	public function getEvent()
	{
		$this->db->select('*')->from('event_sub')
							  ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL');

		return $this->db->get()->result();
	}

	public function insertEvent($idSub,$banner,$poster)
	{
		$data1 = array('ID_SUB' 		=> $idSub, 
					   'NAMA_EVENT'		=> $this->input->post('name'),
					   'SUB_NAMA_EVENT'	=> $this->input->post('title')
					);

		$this->db->insert('event_sub', $data1);

		$lastIdEvent = $this->db->insert_id();

		$data2 = array('ID_EVENT' 			=> $lastIdEvent, 
					   'NAMA_DETAIL'		=> $this->input->post('detail'),
					   'NAMA_MINI_TITLE'	=> $this->input->post('miniName'),
					   'SUB_NAMA_TITLE'		=> $this->input->post('subName'),
					   'DESC_DETAIL'		=> $this->input->post('desc'),
					   'BANNER_DETAIL'		=> $banner,
					   'POSTER_DETAIL'		=> $poster
					);

		$this->db->insert('detail_event', $data2);

		$lastIdDetail = $this->db->insert_id();

		$data3 = array('ID_DETAIL' => $lastIdDetail );
		
		$this->db->where('ID_EVENT', $lastIdEvent)->update('event_sub', $data3);

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;
	}

	public function deleteEvent($idDetail,$idEvent)
	{
		$this->db->where('ID_DETAIL', $idDetail)->delete('detail_event');
		$this->db->where('ID_EVENT', $idEvent)->delete('event_sub');

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;	
	}

	public function updateEvent($idEvent,$banner,$poster)
	{
		$data1 = array('NAMA_EVENT'		=> $this->input->post('name'),
					   'SUB_NAMA_EVENT'	=> $this->input->post('title')
					);

		$this->db->where('ID_EVENT', $idEvent)->update('event_sub', $data1);

		$data2 = array('NAMA_DETAIL'		=> $this->input->post('detail'),
					   'NAMA_MINI_TITLE'	=> $this->input->post('miniName'),
					   'SUB_NAMA_TITLE'		=> $this->input->post('subName'),
					   'DESC_DETAIL'		=> $this->input->post('desc'),
					   'BANNER_DETAIL'		=> $banner,
					   'POSTER_DETAIL'		=> $poster
					);

		$this->db->where('ID_EVENT', $idEvent)->update('detail_event', $data2);

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;	
	}

	public function updateEventBanner($idEvent,$banner)
	{
		$data1 = array('NAMA_EVENT'		=> $this->input->post('name'),
					   'SUB_NAMA_EVENT'	=> $this->input->post('title')
					);

		$this->db->where('ID_EVENT', $idEvent)->update('event_sub', $data1);

		$data2 = array('NAMA_DETAIL'		=> $this->input->post('detail'),
					   'NAMA_MINI_TITLE'	=> $this->input->post('miniName'),
					   'SUB_NAMA_TITLE'		=> $this->input->post('subName'),
					   'DESC_DETAIL'		=> $this->input->post('desc'),
					   'BANNER_DETAIL'		=> $banner
					);

		$this->db->where('ID_EVENT', $idEvent)->update('detail_event', $data2);

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;
	}

	public function updateEventPoster($idEvent,$poster)
	{
		$data1 = array('NAMA_EVENT'		=> $this->input->post('name'),
					   'SUB_NAMA_EVENT'	=> $this->input->post('title')
					);

		$this->db->where('ID_EVENT', $idEvent)->update('event_sub', $data1);

		$data2 = array('NAMA_DETAIL'		=> $this->input->post('detail'),
					   'NAMA_MINI_TITLE'	=> $this->input->post('miniName'),
					   'SUB_NAMA_TITLE'		=> $this->input->post('subName'),
					   'DESC_DETAIL'		=> $this->input->post('desc'),
					   'POSTER_DETAIL'		=> $poster
					);

		$this->db->where('ID_EVENT', $idEvent)->update('detail_event', $data2);

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;
	}

	public function updateEventWithoutPhoto($idEvent)
	{
		$data1 = array('NAMA_EVENT'		=> $this->input->post('name'),
					   'SUB_NAMA_EVENT'	=> $this->input->post('title')
					);

		$this->db->where('ID_EVENT', $idEvent)->update('event_sub', $data1);

		$data2 = array('NAMA_DETAIL'		=> $this->input->post('detail'),
					   'NAMA_MINI_TITLE'	=> $this->input->post('miniName'),
					   'SUB_NAMA_TITLE'		=> $this->input->post('subName'),
					   'DESC_DETAIL'		=> $this->input->post('desc'),
					);

		$this->db->where('ID_EVENT', $idEvent)->update('detail_event', $data2);

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;
	}

}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */