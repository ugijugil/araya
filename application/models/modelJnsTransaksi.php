<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelJnsTransaksi extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDataJnsTransaksi(){
		$query = $this->db->query("SELECT * FROM MASTER_JNS_TRANS");
		return $query->result();
	}

}

/* End of file modelJnsTransaksi.php */
/* Location: ./application/models/modelJnsTransaksi.php */ ?>