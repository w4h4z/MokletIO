<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

	public function getEvent()
	{
		$this->db->select('*')->from('event_sub')
							  ->join('detail_event', 'detail_event.ID_DETAIL=event_sub.ID_DETAIL');

		return $this->db->get()->result();
	}


	public function insertEvent($banner,$poster)
	{
		$data1 = array('ID_SUB' 		=> , 
					  'NAMA_EVENT'		=> ,
					  'SUB_NAMA_EVENT'	=> 
					);

		$this->db->insert('event_sub', $data1);

		$lastIdEvent = $this->db->insert_id();

		$data2 = array('ID_EVENT' 			=> $lastIdEvent, 
					  'NAMA_DETAIL'			=> ,
					  'NAMA_MINI_TITLE'		=> ,
					  'SUB_NAMA_TITLE'		=> ,
					  'DESC_DETAIL'			=> ,
					  'BANNER_DETAIL'		=> $banner,
					  'POSTER_DETAIL'		=> $poster
					);

		$this->db->insert('detail_event', $data2);

		$lastIdDetail = $this->db->insert_id();

		$data3 = array('ID_DETAIL' => $lastIdDetail );
		
		$this->db->update('event_sub', $data3)->where('ID_EVENT', $lastIdEvent);

		if($this->db->affected_rows() == 0){
			return false;
		}

		return true;
	}

}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */