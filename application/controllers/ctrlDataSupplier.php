<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlDataSupplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('modelDataSupplier');
		$data['judul'] = 'Data Supplier';
		$data['supplier'] = $this->modelDataSupplier->getDataSupplier();
		
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/data_supplier.php',$data);
		$this->load->view('component/main-footer');
		
	}

}

/* End of file ctrlDataSupplier.php */
/* Location: ./application/controllers/ctrlDataSupplier.php */ ?>