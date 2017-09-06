<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlTransPenjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('modelTansPenjualan');
		$data['judul'] = 'Data Penjualan';
		$data['penjualan'] = $this->modelTansPenjualan->getTransPenjualan();
		
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/trans_penjualan.php',$data);
		$this->load->view('component/main-footer');
		
	}
}

/* End of file ctrlTransPenjualan.php */
/* Location: ./application/controllers/ctrlTransPenjualan.php */ ?>