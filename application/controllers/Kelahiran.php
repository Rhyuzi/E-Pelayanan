<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelahiran extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}
	
	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Kelahiran';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
			$this->form_validation->set_rules('buku_nikah', 'Fotokopi Buku / Surat Nikah', 'required');
			$this->form_validation->set_rules('rs', 'Fotokopi Pengantar Kelahiran', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('kl/syarat_kl', $data);
				$this->load->view('template/footer');
			}else{
				redirect('Kelahiran/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('kl/syarat_kl', $data);
			$this->load->view('template/footer');
		}
	}

	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Kelahiran';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['print'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('jam_lahir', 'Jam Lahir', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
			$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
			$this->form_validation->set_rules('tempat_nikah', 'Tempat Nikah', 'required');
			$this->form_validation->set_rules('tanggal_nikah', 'Tanggal Nikah', 'required');
            $this->form_validation->set_rules('no_buku', 'Nomor Buku', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('kl/form_kl', $data);
				$this->load->view('template/footer');
			}else{
				$this->kelahiran_model->tambah_data();
				redirect('Kelahiran/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('kl/form_kl', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->kelahiran_model->tampilkan();
		$this->load->view('kl/cetak_kl', $data);
	}

	public function rekap($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'kelahiran/rekap';
		$config['total_rows'] = $this->db->count_all('kelahiran');
		$config['per_page'] = 20;
		$config['uri_segment'] = 5;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		
		$data['judul'] = 'Rekapitulasi';
		$data['sub_judul'] = 'Tabel Pembuatan Surat';
		$data['sub_judul2'] = 'Kelahiran';
		$data['kl'] = $this->kelahiran_model->get_kl(FALSE, $config['per_page'], $offset);

		$this->load->view('template/header', $data);
		$this->load->view('kl/rekap_kl', $data);
		$this->load->view('template/footer');
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('kelahiran', ['no_reg' => $id])->result_array();
		$this->load->view('kl/cetak_kl', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('kelahiran', ['no_reg' => $id]);
		redirect('kelahiran/rekap');
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Kelahiran';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->kl_model->get_kl($id);
		$data['data_lama'] = $this->kelahiran_model->get_kl_by_id($id);

		$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jam_lahir', 'Jam Lahir', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('tempat_nikah', 'Tempat Nikah', 'required');
		$this->form_validation->set_rules('tanggal_nikah', 'Tanggal Nikah', 'required');
		$this->form_validation->set_rules('no_buku', 'Nomor Buku', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('kl/edit_kl', $data);
			$this->load->view('template/footer');
		}else{
			$this->kelahiran_model->ubah_data_kl($id);
			redirect('kelahiran/rekap');
		}
	}

	public function update(){
		$this->kelahiran_model->ubah_data_kl($id);
		redirect('kelahiran/rekap');
	}
}