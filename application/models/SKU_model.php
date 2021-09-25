<?php
    class SKU_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function tambah_data(){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'nama' => $this->input->post('nama', true),
                'nik' => $this->input->post('nik', true),
                'jk' => $this->input->post('kelamin', true),
                'tempat_lhr' => $this->input->post('tempat_lahir', true),
                'tgl_lahir' => $this->input->post('tanggal_lahir', true),
                'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
                'kerja' => $this->input->post('pekerjaan', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),

                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'no_pengantar' => $this->input->post('reg_rw', true),
                'tgl_pengantar' => $this->input->post('tgl_reg', true),

                'usaha' => $this->input->post('usaha', true),
                'alamat_usaha' => $this->input->post('alamat_usaha', true),
                'untuk' => $this->input->post('untuk', true)
            );
            
            $this->db->insert('sku',$newdata);
        }

        public function tampilkan(){
            $last_id =  $this->db->query("select no_reg from sku order by dibuat_pada desc")->row_array();
            $baru = $last_id['no_reg'];
            return $this->db->get_where('sku', ['no_reg' => $baru])->result_array();
        }

        public function get_sku($id = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
				$this->db->limit($limit, $offset);
            }
            if ($id == FALSE) {
                return $this->db->get('sku')->result_array();
            }
            $query = $this->db->get('sku', array('no_reg' => $id));
			return $query->row_array();
        }

        public function get_sku_by_id($id){
            return $this->db->get_where('sku', ['no_reg' => $id])->row_array();
        }

        public function ubah_data_sku($id){
			$newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'nama' => $this->input->post('nama', true),
                'nik' => $this->input->post('nik', true),
                'jk' => $this->input->post('kelamin', true),
                'tempat_lhr' => $this->input->post('tempat_lahir', true),
                'tgl_lahir' => $this->input->post('tanggal_lahir', true),
                'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
                'kerja' => $this->input->post('pekerjaan', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),

                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'no_pengantar' => $this->input->post('reg_rw', true),
                'tgl_pengantar' => $this->input->post('tgl_reg', true),

                'usaha' => $this->input->post('usaha', true),
                'alamat_usaha' => $this->input->post('alamat_usaha', true),
                'untuk' => $this->input->post('untuk', true)
            );
			$this->db->where('sku.no_reg', $id);
			return $this->db->update('sku', $newdata);
        }
    }
?>