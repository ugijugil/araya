<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelPelanggan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getDataPelanggan(){
		$query = $this->db->query("SELECT * FROM DATA_PELANGGAN");
		return $query->result();
	}

	public function getSequencePelanggan($nama){
		$this->db->query("INSERT INTO SEQ_PELANGGAN(KETERANGAN) VALUES('ADD SEQUENCE FOR ".$nama."')");
		$query = $this->db->query("SELECT SEQUENCES FROM SEQ_PELANGGAN ORDER BY SEQUENCES DESC LIMIT 1");
		return $query->result();
	}


	public function setDataPelanggan($data, $tabel){
		$this->db->insert($tabel,$data);
	}

	public function viewDataPelanggan($where, $tabel){	
		return $this->db->get_where($tabel,$where);
	}

	public function updateDataPelanggan($where,$data,$tabel){	
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}
}

/* End of file modelPelanggan.php */
/* Location: ./application/models/modelPelanggan.php */ ?>