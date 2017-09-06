<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlKatalogBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('modelKatalogBarang');
		$data['judul'] = 'Data Katalog Barang';
		$data['katalog'] = $this->modelKatalogBarang->getKatalogBarang();
		
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/katalog_barang.php',$data);
		$this->load->view('component/main-footer');
		
	}

}

/* End of file katalog_barang.php */
/* Location: ./application/controllers/katalog_barang.php */ ?>