<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelDataSupplier extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

 	public function getDataSupplier()
	{
		$query = $this->db->query("SELECT * FROM DATA_SUPPLIER WHERE AKTIF='1'");
		return $query->result();
	}

}

/* End of file modelDataSupplier.php */
/* Location: ./application/models/modelDataSupplier.php */ ?>