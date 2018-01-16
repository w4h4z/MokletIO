<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public $id_sub;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Frontend_model');
	}

	public function index()
	{
		$data['event'] = $this->Frontend_model->getAllEvent();
		$data['jumlahAllGallery'] = $this->Frontend_model->getJumlahAllGallery($this->id_sub);
		$data['eventPastAll'] = $this->Frontend_model->getAllLast3Event($this->id_sub);
		$this->load->view('home', $data);
	}

	public function sub_index()
	{
		$this->id_sub = $this->Frontend_model->getIdsub($this->uri->segment(3));
		$data['data'] = $this->Frontend_model->getSubBySingkatan($this->id_sub);
		$data['anggota'] = $this->Frontend_model->getAnggota($this->id_sub);
		$data['gallery'] = $this->Frontend_model->getGallery($this->id_sub, $this->uri->segment(4));
		$data['jumlahAnggota'] = $this->Frontend_model->getJumlahAnggota($this->id_sub);
		$data['jumlahGallery'] = $this->Frontend_model->getJumlahGallery($this->id_sub);
		$data['feature'] = $this->Frontend_model->getFeature($this->id_sub);
		$data['event'] = $this->Frontend_model->getEvent($this->id_sub);
		//event past
		$data['eventPast'] = $this->Frontend_model->getLast3Event($this->id_sub);
		$this->load->view('experiment', $data);
		$front = array(
			'SUB' => $this->uri->segment(3)
		);
		
		$this->session->set_userdata( $front );
	}

	public function about(){
		$this->load->view('about');
	}

	public function galleryPagination()
	{
		//echo $this->input->post('startPage');
		$data = $this->Frontend_model->getGallery($this->input->post('startPage'));
		foreach ($data as $Gallery) {

				echo '<div style="background-image:url('. base_url(); ?>uploads/<?php echo $Gallery->FOTO_GAL.')" class="pct"></div>';
			}		
			//$this->output->enable_profiler(TRUE);
		//echo json_encode($data);
		//echo json_encode(array("status" => TRUE));
	}

	public function galleryAllPagination()
	{

		$data = $this->Frontend_model->getAllGallery($this->input->post('startPage'));
		foreach ($data as $Gallery) {
				echo '<div style="background-image:url('. base_url(); ?>uploads/<?php echo $Gallery->FOTO_GAL.')" class="pct thumbnail"></div>';
			}		
	}

	public function modalPastEvent(){
		$data = $this->Frontend_model->getDetailEvent($this->input->post('ID_EVENT'));
		echo 	'<div class="modal-intro1-message">
					<p class="mini-title">'.$data->NAMA_MINI_TITLE.'</p>
					<h1>'.$data->NAMA_DETAIL.'</h1>
					<hr>
					<h4>'.$data->SUB_NAMA_TITLE.'</h4>
				</div>
				<div class="modal-intro1-content">
					<div class="modal-intro1-img">
						<img src="'.base_url('uploads/').$data->POSTER_DETAIL.'" class="img-responsive thumbnail" alt="">
					</div>
					<div class="modal-intro1-desc">
							'.
								$data->DESC_DETAIL
							.'
					</div>
				</div>';
	}

	public function daftar()
		{
			$data = array(
					'ID_SUB' => $this->input->post('id_sub'),
					'NAMA_MEMBER' => $this->input->post('nama_member'),
					'ANGKATAN_MEMBER' => $this->input->post('angkatan_member'),
					'KELAS_MEMBER' => $this->input->post('kelas_member'),
					'NO_HP_MEMBER' => $this->input->post('book_category'),
					'ALASAN_MEMBER' => $this->input->post('alasan_meber'),

					'FOTO_MEMBER' => $this->input->post('foto_member'),
					'JABATAN_MEMBER' => 'Anggota'
				);
			$insert = $this->Frontend_model->addMember($data);
			echo json_encode(array("status" => TRUE));
		}

	public function daftarMember()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '2000';
		$this->load->library('upload', $config);

		if( $this->upload->do_upload('foto_member')){
			$upload = $this->upload->data();
			$foto = $upload['file_name'];

			if($this->Frontend_model->insertMember($foto) == TRUE){
				echo 'true';
			} else {
				echo 'false';
			}
		} else { 
			echo $this->upload->display_errors();
		}
		
		//echo json_encode($r);
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */