<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlJnsTransaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('modelJnsTransaksi');
		$data['judul'] = 'Data Jenis Transaksi';
		$data['jnstrans'] = $this->modelJnsTransaksi->getDataJnsTransaksi();

		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/master_jenis_transaksi.php',$data);
		$this->load->view('component/main-footer');
		
		
	}

}

/* End of file ctrlJnsTransaksi.php */
/* Location: ./application/controllers/ctrlJnsTransaksi.php */ ?>