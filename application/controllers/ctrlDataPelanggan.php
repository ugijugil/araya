<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ctrlDataPelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('modelPelanggan');
		$data['judul'] = 'Data Pelanggan';
		$data['pelanggan'] = $this->modelPelanggan->getDataPelanggan();
		
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/pelanggan/master_data_pelanggan',$data);
		$this->load->view('component/main-footer');
	}

	public function formPelanggan(){
		$data['judul'] = "Tambah Data Pelanggan";
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/pelanggan/form_data_pelanggan',$data);
		$this->load->view('component/main-footer');
	}

	public function viewPelanggan($id){
		$where = array('KODE_PELANGGAN' => $id);
		$this->load->model('modelPelanggan');
		$data['pelanggan'] = $this->modelPelanggan->viewDataPelanggan($where,'DATA_PELANGGAN')->result();
		$data['judul'] = "Edit Data Pelanggan";
		$this->load->view('component/main-header');
		$this->load->view('component/main-sidebar');
		$this->load->view('araya/pelanggan/view_data_pelanggan',$data);
		$this->load->view('component/main-footer');
	}

	public function updatePelanggan(){
		$kode = $this->input->post('txtKodePelanggan');
		$nama = $this->input->post('txtNamaPelanggan');
		$alamat = $this->input->post('txtAlamat');
		$email = $this->input->post('txtEmail');
		$telp1 = $this->input->post('txtTelp1');
		$telp2 = $this->input->post('txtTelp2');
		$tgl = $this->input->post('txtTglDaftar');	

		$data = array('NAMA' => $nama,
					'ALAMAT' => $alamat,
					'EMAIL' => $email,
					'TELEPON_1' => $telp1,
					'TELEPON_2' => $telp2,
					'TGL_DAFTAR' => $tgl
					 );	

		$where = array('KODE_PELANGGAN' => $kode);

		$this->load->model('modelPelanggan');
		$this->modelPelanggan->updateDataPelanggan($where, $data, "DATA_PELANGGAN");
		redirect('ctrlDataPelanggan/index');
	}

	public function tambahPelanggan(){
		$this->load->model('modelPelanggan');
		$seq = $this->modelPelanggan->getSequencePelanggan($this->input->post('txtNamaPelanggan'));
		foreach ($seq as $seq) {
			$seqpel = $seq->SEQUENCES;
		}

		$kode = date("Ymd")."PLG".$seqpel;
		$nama = $this->input->post('txtNamaPelanggan');
		$alamat = $this->input->post('txtAlamat');
		$email = $this->input->post('txtEmail');
		$telp1 = $this->input->post('txtTelp1');
		$telp2 = $this->input->post('txtTelp2');
		$tgl = date("Y-m-d");

		$data = array('KODE_PELANGGAN' => $kode,
					'NAMA' => $nama,
					'ALAMAT' => $alamat,
					'EMAIL' => $email,
					'TELEPON_1' => $telp1,
					'TELEPON_2' => $telp2,
					'TGL_DAFTAR' => $tgl
					 );

		$this->load->model('modelPelanggan');
		$this->modelPelanggan->setDataPelanggan($data, "DATA_PELANGGAN");
		redirect('ctrlDataPelanggan/index');
	}

}

/* End of file ctrlDataPelanggan.php */
/* Location: ./application/controllers/ctrlDataPelanggan.php */ ?>