<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class ctrlEkspedisi extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
		}
	
		public function index()
		{
			$this->load->model('modelEkspedisi');
			$data['judul'] = 'Data Ekspedisi';
			$data['ekspedisi'] = $this->modelEkspedisi->getEkspedisi();
			
			$this->load->view('component/main-header');
			$this->load->view('component/main-sidebar');
			$this->load->view('araya/master_ekspedisi.php',$data);
			$this->load->view('component/main-footer');
			
		}
	
	}
	
	/* End of file expedisi-ctrl.php */
	/* Location: ./application/controllers/expedisi-ctrl.php */
?>