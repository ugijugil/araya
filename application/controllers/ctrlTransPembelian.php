<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlTransPembelian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('modelTansPembelian');
		$data['judul'] = 'Data Pembelian';
		$data['pembelian'] = $this->modelTansPembelian->getTransPembelian();
		
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/trans_pembelian.php',$data);
		$this->load->view('component/main-footer');
		
	}

}

/* End of file ctrlTransPembelian.php */
/* Location: ./application/controllers/ctrlTransPembelian.php */ ?>