<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelStockBarang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDataStockBarang()
	{
		$query = $this->db->query("SELECT * FROM STOCK_BARANG");
		return $query->result();
	}

}

/* End of file modelStockBarang.php */
/* Location: ./application/models/modelStockBarang.php */ ?>