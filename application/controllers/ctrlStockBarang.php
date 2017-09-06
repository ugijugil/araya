<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 
	 class ctrlStockBarang extends CI_Controller {
	 
	 	public function __construct()
	 	{
	 		parent::__construct();
	 	}
	 
	 	public function index()
	 	{
	 		$this->load->model('modelStockBarang');
			$data['judul'] = 'Data Stock Barang';
			$data['stock'] = $this->modelStockBarang->getDataStockBarang();
			
			$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/stock_barang.php',$data);
		$this->load->view('component/main-footer');
			
	 	}
	 
	 }
	 
	 /* End of file ctrlStockBarang.php */
	 /* Location: ./application/controllers/ctrlStockBarang.php */ 
 ?>