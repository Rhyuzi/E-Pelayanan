<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kremasi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}

	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Ket. Kremasi';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
			$this->form_validation->set_rules('rs', 'Fotokopi Keterangnan Meninggal', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('km/syarat_kremasi', $data);
				$this->load->view('template/footer');
			}else{
				redirect('kremasi/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('km/syarat_kremasi', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Ket. Kremasi';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['mati'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('pemohon', 'Nama', 'required');
			$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
			$this->form_validation->set_rules('status', 'Status Perkawinan', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			
			$this->form_validation->set_rules('alm', 'Nama Almarhum', 'required');
			$this->form_validation->set_rules('tempat_lhr', 'Tempat Lahir Almarhum', 'required');
			$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir Almarhum', 'required');
			$this->form_validation->set_rules('agama_alm', 'Agama Almarhum', 'required');
			$this->form_validation->set_rules('alamat_alm', 'Alamat Almarhum', 'required');

			$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
			$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
			$this->form_validation->set_rules('reg_rw', 'No. Registrasi dari RW', 'required');
			$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi dari RW', 'required');
			
			$this->form_validation->set_rules('rs', 'Pengakuan Rumah Sakit', 'required');
			$this->form_validation->set_rules('tgl_wafat', 'Tanggal Meninggal', 'required');
			$this->form_validation->set_rules('krematorium', 'Di Krematorium', 'required');
			$this->form_validation->set_rules('tgl_kremasi', 'Tanggal Dikremasi', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('km/form_kremasi', $data);
				$this->load->view('template/footer');
			}else{
				$this->kremasi_model->tambah_data();
				redirect('kremasi/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('km/form_kremasi', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->kremasi_model->tampilkan();
		$this->load->view('km/cetak_kremasi', $data);
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('kremasi', ['no_reg' => $id])->result_array();
		$this->load->view('km/cetak_kremasi', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('kremasi', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat kremasi';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->kremasi_model->get_kremasi($id);
		$data['data_lama'] = $this->kremasi_model->get_kremasi_by_id($id);

		$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('pemohon', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('kk', 'Nomor KK', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
		$this->form_validation->set_rules('status', 'Status Perkawinan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		$this->form_validation->set_rules('alm', 'Nama Almarhum', 'required');
		$this->form_validation->set_rules('tempat_lhr', 'Tempat Lahir Almarhum', 'required');
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir Almarhum', 'required');
		$this->form_validation->set_rules('agama_alm', 'Agama Almarhum', 'required');
		$this->form_validation->set_rules('alamat_alm', 'Alamat Almarhum', 'required');

		$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
		$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
		$this->form_validation->set_rules('reg_rw', 'No. Registrasi dari RW', 'required');
		$this->form_validation->set_rules('tgl_reg', 'Tanggal Registrasi dari RW', 'required');
		
		$this->form_validation->set_rules('rs', 'Pengakuan Rumah Sakit', 'required');
		$this->form_validation->set_rules('tgl_wafat', 'Tanggal Meninggal', 'required');
		$this->form_validation->set_rules('krematorium', 'Di Krematorium', 'required');
		$this->form_validation->set_rules('tgl_kremasi', 'Tanggal Dikremasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('km/edit_kremasi', $data);
			$this->load->view('template/footer');
		}else{
			$this->kremasi_model->ubah_data_kremasi($id);
			redirect('kematian/rekap');
		}
	}

	public function update(){
		$this->kremasi_model->ubah_data_kremasi($id);
		redirect('kematian/rekap');
	}
}