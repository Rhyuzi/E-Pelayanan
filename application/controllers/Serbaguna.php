<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serbaguna extends CI_Controller {
	
	function __construct(){

		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}
	
	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Keterangan Serba Guna';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sg/syarat_sg', $data);
				$this->load->view('template/footer');
			}else{
				redirect('serbaguna/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sg/syarat_sg', $data);
			$this->load->view('template/footer');
		}
	}

	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Keterangan Serba Guna';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['print'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kk', 'No. KK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
			$this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('rt', 'RT', 'required');
			$this->form_validation->set_rules('rw', 'RW', 'required');
			$this->form_validation->set_rules('reg_rw', 'Nomor Registrasi Surat Pengantar RW', 'required');
			$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi Surat Pengantar RW', 'required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
			$this->form_validation->set_rules('untuk', 'Untuk Apa', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sg/form_sg', $data);
				$this->load->view('template/footer');
			}else{
				$this->serbaguna_model->tambah_data();
				redirect('serbaguna/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sg/form_sg', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->serbaguna_model->tampilkan();
		$this->load->view('sg/cetak_sg', $data);
	}

	public function rekap($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'serbaguna/rekap';
		$config['total_rows'] = $this->db->count_all('serbaguna');
		$config['per_page'] = 20;
		$config['uri_segment'] = 5;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		
		$data['judul'] = 'Rekapitulasi';
		$data['sub_judul'] = 'Tabel Pembuatan Surat';
		$data['sub_judul2'] = 'Ket. Serbaguna';
		$data['sg'] = $this->serbaguna_model->get_sg(FALSE, $config['per_page'], $offset);

		$this->load->view('template/header', $data);
		$this->load->view('sg/rekap_sg', $data);
		$this->load->view('template/footer');
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('serbaguna', ['no_reg' => $id])->result_array();
		$this->load->view('sg/cetak_sg', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('serbaguna', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Ket. Serbaguna';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->sg_model->get_sg($id);
		$data['data_lama'] = $this->serbaguna_model->get_sg_by_id($id);

		$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
		$this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('rt', 'RT', 'required');
		$this->form_validation->set_rules('rw', 'RW', 'required');
		$this->form_validation->set_rules('reg_rw', 'Nomor Registrasi Surat Pengantar RW', 'required');
		$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi Surat Pengantar RW', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('sg/edit_sg', $data);
			$this->load->view('template/footer');
		}else{
			$this->serbaguna_model->ubah_data_sg($id);
			//pesan
			$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
			redirect('serbaguna/rekap');
		}
	}

	public function update(){
		$this->serbaguna_model->ubah_data_sg($id);
		//pesan
		$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
		redirect('serbaguna/rekap');
	}
}
