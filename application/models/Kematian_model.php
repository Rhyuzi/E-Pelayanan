<?php
    class Kematian_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function tambah_data(){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'nama' => $this->input->post('nama', true),
                'umur' => $this->input->post('umur', true),
                'jk' => $this->input->post('kelamin', true),
                'alamat' => $this->input->post('alamat', true),
                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'nik' => $this->input->post('nik', true),
                'kk' => $this->input->post('kk', true),
                'tgl_wafat' => $this->input->post('tanggal_wafat', true),
                'tempat' => $this->input->post('tempat_wafat', true),
                'sebab' => $this->input->post('sebab', true)
            );
            
            $this->db->insert('kematian',$newdata);
        }

        public function tampilkan(){
            $last_id =  $this->db->query("select no_reg from kematian order by dibuat_pada desc")->row_array();
            $baru = $last_id['no_reg'];
            return $this->db->get_where('kematian', ['no_reg' => $baru])->result_array();
        }

        public function get_km($id = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
				$this->db->limit($limit, $offset);
            }
            if ($id == FALSE) {
                $this->db->order_by('kematian.dibuat_pada', 'DESC');
                return $this->db->get('kematian')->result_array();
            }
            $query = $this->db->get('kematian', array('no_reg' => $id));
			return $query->row_array();
        }

        public function get_km_by_id($id){
            return $this->db->get_where('kematian', ['no_reg' => $id])->row_array();
        }

        public function ubah_data_km($id){
			$newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'nama' => $this->input->post('nama', true),
                'umur' => $this->input->post('umur', true),
                'jk' => $this->input->post('kelamin', true),
                'alamat' => $this->input->post('alamat', true),
                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'nik' => $this->input->post('nik', true),
                'kk' => $this->input->post('kk', true),
                'tgl_wafat' => $this->input->post('tanggal_wafat', true),
                'tempat' => $this->input->post('tempat_wafat', true),
                'sebab' => $this->input->post('sebab', true)
            );
			$this->db->where('kematian.no_reg', $id);
			return $this->db->update('kematian', $newdata);
        }
    }
?>