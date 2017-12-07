<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function insertGallery($id, $gallery)
	{
		$data = array('ID_SUB' 		=> $id,
					  'FOTO_GAL'	=> $gallery
					 );

		$this->db->insert('gallery_sub', $data);

		if ($this->db->affected_rows() == 0) {
			return false;
		} 
		return true;
	}

	public function deleteGallery($id)
	{
		$this->db->where('ID_GAL', $id)->delete('gallery_sub');
		
		if($this->db->affected_rows() == 0){
			return false;
		} 
		return true;
	}

	public function getGallery($id)
	{
		return $this->db->select('*')->from('gallery_sub')->where('ID_SUB', $id)->get()->result();
	}

}

/* End of file gallery_model.php */
/* Location: ./application/models/gallery_model.php */