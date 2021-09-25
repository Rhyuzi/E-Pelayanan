<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SKU extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('pdf', 'MYPDF');
        $this->load->helper('tanggal');
	}
	
	public function index(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Keterangan Usaha';
		$data['sub_judul2'] = 'Persyaratan';
		
		if (isset($_POST['next'])) {
			$this->form_validation->set_rules('pengantar', 'Surat Pengantar', 'required');
			$this->form_validation->set_rules('ktp', 'Fotokopi KTP', 'required');
			$this->form_validation->set_rules('kk', 'Fotokopi KK', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sku/syarat_sckc', $data);
				$this->load->view('template/footer');
			}else{
				redirect('sku/form');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sku/syarat_sku', $data);
			$this->load->view('template/footer');
		}
	}

	public function form(){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Keterangan Usaha';
		$data['sub_judul2'] = 'Isian';
		
		if (isset($_POST['print'])) {
			$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nik', 'Nomor KTP', 'required|numeric|exact_length[16]');
			$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('agama', 'Agama', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
            
			$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
			$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
			$this->form_validation->set_rules('reg_rw', 'RW', 'required');
			$this->form_validation->set_rules('tgl_reg', 'Tgl_Reg', 'required');
			
			$this->form_validation->set_rules('usaha', 'Usaha', 'required');
			$this->form_validation->set_rules('alamat_usaha', 'Alamat Usaha', 'required');
            $this->form_validation->set_rules('untuk', 'Untuk Keperluan', 'required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', $data);
				$this->load->view('sku/form_sku', $data);
				$this->load->view('template/footer');
			}else{
				$this->sku_model->tambah_data();
				redirect('sku/cetak');
			}
		}else{
			$this->load->view('template/header', $data);
			$this->load->view('sku/form_sku', $data);
			$this->load->view('template/footer');
		}
	}
	
	public function cetak(){
		$data['judul'] = 'Tinjauan Hasil';
		//$data['hasil'] = 'Clear';
		$data['hasil'] = $this->sku_model->tampilkan();
		$this->load->view('sku/cetak_sku', $data);
	}

	public function rekap($offset = 0){
		// Pagination Config	
		$config['base_url'] = base_url() . 'sku/rekap';
		$config['total_rows'] = $this->db->count_all('sku');
		$config['per_page'] = 20;
		$config['uri_segment'] = 5;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);
		
		$data['judul'] = 'Rekapitulasi';
		$data['sub_judul'] = 'Tabel Pembuatan Surat';
		$data['sub_judul2'] = 'Ket. Usaha';
		$data['sku'] = $this->sku_model->get_sku(FALSE, $config['per_page'], $offset);

		$this->load->view('template/header', $data);
		$this->load->view('sku/rekap_sku', $data);
		$this->load->view('template/footer');
	}
	
	public function reprint($id){
		$data['judul'] = 'Tinjauan Ulang';
		//$data['hasil'] = 'Clear';
        $data['hasil'] = $this->db->get_where('sku', ['no_reg' => $id])->result_array();
		$this->load->view('sku/cetak_sku', $data);
	}

	public function hapus($id){
		$this->db->where('no_reg', $id);
		$this->db->delete('sku', ['no_reg' => $id]);
	}

	public function edit($id){
		$data['judul'] = 'Buat Surat';
		$data['sub_judul'] = 'Surat Ket. Usaha';
		$data['sub_judul2'] = 'Pengubahan';
		//$data['data_lama'] = $this->sku_model->get_sku($id);
		$data['data_lama'] = $this->sku_model->get_sku_by_id($id);

		$this->form_validation->set_rules('no_reg', 'Nomor Registrasi', 'required|numeric');
			
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'Nomor KTP', 'required|numeric|exact_length[16]');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		$this->form_validation->set_rules('rt', 'RT', 'required|numeric');
		$this->form_validation->set_rules('rw', 'RW', 'required|numeric');
		$this->form_validation->set_rules('reg_rw', 'RW', 'required');
		$this->form_validation->set_rules('tgl_reg', 'Tgl_Reg', 'required');
		
		$this->form_validation->set_rules('usaha', 'Usaha', 'required');
		$this->form_validation->set_rules('alamat_usaha', 'Alamat Usaha', 'required');
		$this->form_validation->set_rules('untuk', 'Untuk Keperluan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('sku/edit_sku', $data);
			$this->load->view('template/footer');
		}else{
			$this->sku_model->ubah_data_sku($id);
			//pesan
			$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
			redirect('sku/rekap');
		}
	}

	public function update(){
		$this->sku_model->ubah_data_sku($id);
		//pesan
		$this->session->set_flashdata('post_updated', 'Data barang telah diperbaharui');
		redirect('sku/rekap');
	}
}
