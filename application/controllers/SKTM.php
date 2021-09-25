<?php
    class SKTM extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('pdf', 'MYPDF');
            $this->load->helper('tanggal');
        }
        public function index($offset = 0){
            // Pagination Config	
            $config['base_url'] = base_url() . 'sktm/index';
            $config['total_rows'] = $this->db->count_all('pbb', 'sekolah', 'rs');
            $config['per_page'] = 10;
            $config['uri_segment'] = 5;
            $config['attributes'] = array('class' => 'pagination-link');
    
            // Init Pagination
            $this->pagination->initialize($config);
            
            $data['judul'] = 'Rekapitulasi';
            $data['sub_judul'] = 'Tabel Pembuatan Surat';
            $data['sub_judul2'] = 'SKTM';
            $data['pbb'] = $this->pbb_model->get_pbb(FALSE, $config['per_page'], $offset);
            $data['sekolah'] = $this->sekolah_model->get_sekolah(FALSE, $config['per_page'], $offset);
            $data['rs'] = $this->rs_model->get_rs(FALSE, $config['per_page'], $offset);
    
            $this->load->view('template/header', $data);
            $this->load->view('sktm/rekap_sktm', $data);
            $this->load->view('template/footer');
        }
    }
    
?>