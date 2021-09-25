<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SKCK extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}
	
	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Pengantar SKCK';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('skck/syarat_skck', $data);
				$this->load->view('template/footer');
			}else{
				redirect('SKCK/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('skck/syarat_skck', $data);
			$this->load->view('template/footer');
		}
	}

	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Pengantar SKCK';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['print'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('no_kk', 'Nomor KK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			
			$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
			$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
			$this->form_validation->set_rules('reg_rw', 'Nomor Registrasi Surat Pengantar RW', 'required');
			$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi Surat Pengantar RW', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('skck/form_skck', $data);
				$this->load->view('template/footer');
			}else{
				$this->skck_model->tambah_data();
				redirect('SKCK/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('skck/form_skck', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->skck_model->tampilkan();
		$this->load->view('skck/cetak_skck', $data);
	}

	public function rekap($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'skck/rekap';
		$config['total_rows'] = $this->db->count_all('skck');
		$config['per_page'] = 20;
		$config['uri_segment'] = 5;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		
		$data['judul'] = 'Rekapitulasi';
		$data['sub_judul'] = 'Tabel Pembuatan Surat';
		$data['sub_judul2'] = 'SKCK';
		$data['skck'] = $this->skck_model->get_skck(FALSE, $config['per_page'], $offset);

		$this->load->view('template/header', $data);
		$this->load->view('skck/rekap_skck', $data);
		$this->load->view('template/footer');
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('skck', ['no_reg' => $id])->result_array();
		$this->load->view('skck/cetak_skck', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('skck', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Pengantar SKCK';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->skck_model->get_skck($id);
		$data['data_lama'] = $this->skck_model->get_skck_by_id($id);

		$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('no_kk', 'Nomor KK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
		$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
		$this->form_validation->set_rules('reg_rw', 'Nomor Registrasi Surat Pengantar RW', 'required');
		$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi Surat Pengantar RW', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('skck/edit_skck', $data);
			$this->load->view('template/footer');
		}else{
			$this->skck_model->ubah_data_skck($id);
			//pesan
			$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
			redirect('skck/rekap');
		}
	}

	public function update(){
		$this->skck_model->ubah_data_skck($id);
		//pesan
		$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
		redirect('skck/rekap');
	}
}
