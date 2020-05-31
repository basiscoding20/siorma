<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Data_Ormawa extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('OrmawaModel');
		}
	
		public function index()
		{
			$this->load->view('_partials/head');
			$this->load->view('_partials/navigation');
			$this->load->view('super_admin/data_ormawa');
			$this->load->view('_partials/footer');
			$this->load->view('_partials/plugin');
			$this->load->view('_partials/super_admin/data_ormawa');
		}

		public function daftar_ormawa()
		{
			$html = '';
			$query = '';

			if($this->input->post('query'))
			  {
			   $query = $this->input->post('query');
			  }
			$data = $this->OrmawaModel->daftar_ormawa($query);
			if ($data->num_rows() > 0) {
				$no = 1;
				foreach ($data->result() as $dp) {
				if ($dp->logo == '') {
					$logo = base_url('assets/images/default.jpg');
				}else{
					$logo = base_url("assets/images/penduduk/$dp->foto");
				}
				$html .= '<div class="card testimonial-card mt-2 mb-3">

				              <div class="card-up aqua-gradient"></div>

				              <div class="avatar mx-auto white">
				                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle img-responsive" alt="woman avatar">
				              </div>

				              <div class="card-body">

				                <h4 class="card-title font-weight-bold">'.$dp->nama_ormawa.'</h4>
				                <hr>

				                <p><i class="fas fa-quote-left"></i> LorLorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
				                  adipisciLorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
				                  adipisciLorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
				                  adipisciem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
				                  adipisci</p>
				              </div>

				            </div>';
				
				}
			} else {
				$html .= '<tr>
							<td colspan="14" class="text-center">Tidak Ada Data</td>
							</tr>';
			}

			echo $html;
		}
	
	}
	
	/* End of file Dashboard.php */
	/* Location: ./application/controllers/admin/Dashboard.php */
?>