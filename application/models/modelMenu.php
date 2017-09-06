<?php 

/*if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelMenu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getMenu()
	{
		$query = $this->db->query("SELECT * FROM MASTER_MENU WHERE PARENT_MENU='' ORDER BY KODE_MENU");
		return $query->result();
	}

	public function getSubMenu()
	{
		$query = $this->db->query("SELECT * FROM MASTER_MENU WHERE PARENT_MENU <> '' ORDER BY PARENT_MENU AND KODE_MENU");
		return $query->result();
	}

	public function getCountMenu(){
		$query = $this->db->query("SELECT count(*) as \"COUNT_MENU\" FROM MASTER_MENU");
		return $query->result();		
	}

}*/

/* End of file modelMenu.php */
/* Location: ./application/models/modelMenu.php */

/* End of file modelMenu.php */
/* Location: ./application/models/modelMenu.php */ ?>