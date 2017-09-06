<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelKatalogBarang extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getKatalogBarang(){
		$query = $this->db->query("SELECT * FROM KATALOG_BARANG");
		return $query->result();
	}

}

/* End of file modelKatalogBarang.php */
/* Location: ./application/models/modelKatalogBarang.php */ ?>