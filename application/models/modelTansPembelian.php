<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelTansPembelian extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getTransPembelian($value='')
	{
		$query = $this->db->query("SELECT * FROM TRANS_PEMBELIAN_HEADER");
		return $query->result();
	}

}

/* End of file modelTansPembelian.php */
/* Location: ./application/models/modelTansPembelian.php */ ?>