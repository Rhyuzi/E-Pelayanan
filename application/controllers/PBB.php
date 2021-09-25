<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PBB extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}
	
	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'SKTM PBB';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
			$this->form_validation->set_rules('pbb', 'Fotokopi PBB', 'required');
			$this->form_validation->set_rules('form', 'Form Pemkot', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sktm/syarat_pbb', $data);
				$this->load->view('template/footer');
			}else{
				redirect('pbb/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sktm/syarat_pbb', $data);
			$this->load->view('template/footer');
		}
	}

	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'SKTM PBB';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['print'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nik', 'Nomor KTP', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
			$this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
            
			$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
			$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
			$this->form_validation->set_rules('reg_rw', 'Registrasi RW', 'required');
			$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi', 'required');
			
			$this->form_validation->set_rules('sppt', 'Nomor Objek Pajak', 'required');
            $this->form_validation->set_rules('karena', 'Penyebab Permohonan', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sktm/form_pbb', $data);
				$this->load->view('template/footer');
			}else{
				$this->pbb_model->tambah_data();
				redirect('pbb/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sktm/form_pbb', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->pbb_model->tampilkan();
		$this->load->view('sktm/cetak_pbb', $data);
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('pbb', ['no_reg' => $id])->result_array();
		$this->load->view('sktm/cetak_pbb', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('pbb', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'SKTM PBB';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->pbb_model->get_pbb($id);
		$data['data_lama'] = $this->pbb_model->get_pbb_by_id($id);

        $this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'Nomor KTP', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
		$this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
		$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
		$this->form_validation->set_rules('reg_rw', 'Registrasi RW', 'required');
		$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi', 'required');
		
		$this->form_validation->set_rules('sppt', 'Nomor Objek Pajak', 'required');
		$this->form_validation->set_rules('karena', 'Penyebab Permohonan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('sktm/edit_pbb', $data);
			$this->load->view('template/footer');
		}else{
			$this->pbb_model->ubah_data_pbb($id);
			//pesan
			$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
			redirect('sktm');
		}
	}

	public function update(){
		$this->pbb_model->ubah_data_pbb($id);
		//pesan
		$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
		redirect('sktm');
	}
}