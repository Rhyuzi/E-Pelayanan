<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}
	
	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'SKTM Sekolah';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sktm/syarat_sekolah', $data);
				$this->load->view('template/footer');
			}else{
				redirect('sekolah/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sktm/syarat_sekolah', $data);
			$this->load->view('template/footer');
		}
	}

	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'SKTM sekolah';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['print'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('pemohon', 'Nama Orangtua', 'required');
			$this->form_validation->set_rules('tempat_lhr', 'Tempat Lahir Orangtua', 'required');
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Orangtua', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
            
			$this->form_validation->set_rules('anak', 'Nama Anak', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Anak', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Anak', 'required');
			$this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
            
			$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
			$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
			$this->form_validation->set_rules('reg_rw', 'Registrasi RW', 'required');
			$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sktm/form_sekolah', $data);
				$this->load->view('template/footer');
			}else{
				$this->sekolah_model->tambah_data();
				redirect('sekolah/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sktm/form_sekolah', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->sekolah_model->tampilkan();
		$this->load->view('sktm/cetak_sekolah', $data);
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('sekolah', ['no_reg' => $id])->result_array();
		$this->load->view('sktm/cetak_sekolah', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('sekolah', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'SKTM Sekolah';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->sekolah_model->get_sekolah($id);
		$data['data_lama'] = $this->sekolah_model->get_sekolah_by_id($id);

        $this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
        $this->form_validation->set_rules('pemohon', 'Nama Orangtua', 'required');
        $this->form_validation->set_rules('tempat_lhr', 'Tempat Lahir Orangtua', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Orangtua', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
        
        $this->form_validation->set_rules('anak', 'Nama Anak', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Anak', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Anak', 'required');
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
        
        $this->form_validation->set_rules('rt', 'RT', 'required|numeric');
        $this->form_validation->set_rules('rw', 'RW', 'required|numeric');
        $this->form_validation->set_rules('reg_rw', 'Registrasi RW', 'required');
        $this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('sktm/edit_sekolah', $data);
			$this->load->view('template/footer');
		}else{
			$this->sekolah_model->ubah_data_sekolah($id);
			//pesan
			$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
			redirect('sktm');
		}
	}

	public function update(){
		$this->sekolah_model->ubah_data_sekolah($id);
		//pesan
		$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
		redirect('sktm');
	}
}