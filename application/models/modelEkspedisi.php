<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class modelEkspedisi extends CI_Model {
	
		public $variable;
	
		public function __construct()
		{
			parent::__construct();
			
		}

		function getEkspedisi(){
			$query = $this->db->query("SELECT * FROM DATA_EKSPEDISI");
			return $query->result();
		}
	
	}
	
	/* End of file expedisi_model.php */
	/* Location: ./application/models/expedisi_model.php */
?>

 