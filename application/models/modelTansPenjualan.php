<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelTansPenjualan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getTransPenjualan()
	{
		$query = $this->db->query("SELECT * FROM TRANS_PENJUALAN_HEADER");
		return $query->result();
	}
}

/* End of file modelTansPenjualan.php */
/* Location: ./application/models/modelTansPenjualan.php */ ?>