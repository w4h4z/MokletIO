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
		$this->load->view('home');
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
		$this->output->enable_profiler(TRUE);
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */