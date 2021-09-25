<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
        $data['judul'] = 'Beranda';
		$data['sub_judul'] = 'Halaman Awal';
		$data['sub_judul2'] = ' ';
        $this->load->view('template/header', $data);
        $this->load->view('home');
        $this->load->view('template/footer');
    }
}
