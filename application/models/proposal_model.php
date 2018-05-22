<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal_model extends CI_Model {

	public function getProposal()
	{
		return $this->db->join('sub_organ','sub_organ.id_sub=proposal.id_sub')->get('proposal')->result();
	}

	public function getDetailProposal($id)
	{
		return $this->db->where('id_proposal', $id)->get('proposal')->row();
	}

	public function insert($file)
	{
		$object = array(
			'id_sub' 	=> $this->session->userdata('userId'),
			'judul'		=> $this->input->post('tittle'),
			'keterangan'=> $this->input->post('keterangan'),
			'file' 		=> $file['file_name']
		);
		$this->db->insert('proposal', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id)
	{
		$proposal = $this->db->where('id_proposal', $id)->get('proposal')->row();
		unlink('./uploads/proposal/'.$proposal->file.'');

		$this->db->where('id_proposal', $id)->delete('proposal');

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function update()
	{
		$data = array(
			'judul' => $this->input->post('tittle'),
			'keterangan' => $this->input->post('keterangan')
		);

		$this->db->where('id_proposal', $this->input->post('idProposal'))->update('proposal', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function updateFileProposal($file)
	{
		$data = array('file' => $file['file_name'] );

		$this->db->where('id_proposal', $this->input->post('idProposal'))->update('proposal', $data);

		if ($this->db->affected_rows() > 0) {
			$proposal = $this->db->where('id_proposal', $this->input->post('idProposal'))->get('proposal')->row();
			unlink('./uploads/proposal/'.$proposal->file.'');

			return true;
		} else {
			return false;
		}
	}

}

/* End of file proposal_model.php */
/* Location: ./application/models/proposal_model.php */