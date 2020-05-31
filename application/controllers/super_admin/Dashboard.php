<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
	
		public function index()
		{
			$this->load->view('_partials/head');
			$this->load->view('_partials/navigation');
			$this->load->view('super_admin/dashboard');
			$this->load->view('_partials/footer');
			$this->load->view('_partials/plugin');
		}
	
	}
	
	/* End of file Dashboard.php */
	/* Location: ./application/controllers/admin/Dashboard.php */
?>