<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematian extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}

	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Kematian';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
			$this->form_validation->set_rules('rs', 'Fotokopi Keterangnan Meninggal', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('km/syarat_km', $data);
				$this->load->view('template/footer');
			}else{
				redirect('Kematian/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('km/syarat_km', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Kematian';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['mati'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
			$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
			$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
			$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('tanggal_wafat', 'Tanggal Meninggal', 'required');
			$this->form_validation->set_rules('tempat_wafat', 'Tempat Meninggal', 'required');
			$this->form_validation->set_rules('sebab', 'Penyebab Kematian', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('km/form_km', $data);
				$this->load->view('template/footer');
			}else{
				$this->kematian_model->tambah_data();
				redirect('Kematian/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('km/form_km', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->kematian_model->tampilkan();
		$this->load->view('km/cetak_km', $data);
	}

	public function rekap($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'kematian/rekap';
		$config['total_rows'] = $this->db->count_all('kematian', 'kremasi');
		$config['per_page'] = 15;
		$config['uri_segment'] = 5;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		
		$data['judul'] = 'Rekapitulasi';
		$data['sub_judul'] = 'Tabel Pembuatan Surat';
		$data['sub_judul2'] = 'Kematian';
		$data['km'] = $this->kematian_model->get_km(FALSE, $config['per_page'], $offset);
		$data['kremasi'] = $this->kremasi_model->get_kremasi(FALSE, $config['per_page'], $offset);

		$this->load->view('template/header', $data);
		$this->load->view('km/rekap_km', $data);
		$this->load->view('template/footer');
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('kematian', ['no_reg' => $id])->result_array();
		$this->load->view('km/cetak_km', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('kematian', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Kematian';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->km_model->get_km($id);
		$data['data_lama'] = $this->kematian_model->get_km_by_id($id);

		$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
		$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('tanggal_wafat', 'Tanggal Meninggal', 'required');
		$this->form_validation->set_rules('tempat_wafat', 'Tempat Meninggal', 'required');
		$this->form_validation->set_rules('sebab', 'Penyebab Kematian', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('km/edit_km', $data);
			$this->load->view('template/footer');
		}else{
			$this->kematian_model->ubah_data_km($id);
			redirect('kematian/rekap');
		}
	}

	public function update(){
		$this->kematian_model->ubah_data_km($id);
		redirect('kematian/rekap');
	}
}