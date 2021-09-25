<?php
    class Kremasi_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function tambah_data(){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'pemohon' => $this->input->post('pemohon', true),
                'nik' => $this->input->post('nik', true),
                'kk' => $this->input->post('kk', true),
                'jk' => $this->input->post('jk', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
                'status' => $this->input->post('status', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),

                'alm' => $this->input->post('alm', true),
                'tempat_lhr' => $this->input->post('tempat_lhr', true),
                'tgl_lhr' => $this->input->post('tgl_lhr', true),
                'agama_alm' => $this->input->post('agama_alm', true),
                'alamat_alm' => $this->input->post('alamat_alm', true),

                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'reg_rw' => $this->input->post('reg_rw', true),
                'tgl_reg' => $this->input->post('tgl_reg', true),

                'rs' => $this->input->post('rs'),
                'tgl_wafat' => $this->input->post('tgl_wafat'),
                'krematorium' => $this->input->post('krematorium'),
                'tgl_kremasi' => $this->input->post('tgl_kremasi')
            );
            
            $this->db->insert('kremasi',$newdata);
        }

        public function tampilkan(){
            $last_id =  $this->db->query("select no_reg from kremasi order by dibuat_pada desc")->row_array();
            $baru = $last_id['no_reg'];
            return $this->db->get_where('kremasi', ['no_reg' => $baru])->result_array();
        }

        public function get_kremasi($id = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
				$this->db->limit($limit, $offset);
            }
            if ($id == FALSE) {
                $this->db->order_by('kremasi.dibuat_pada', 'DESC');
                return $this->db->get('kremasi')->result_array();
            }
            $query = $this->db->get('kremasi', array('no_reg' => $id));
			return $query->row_array();
        }

        public function get_kremasi_by_id($id){
            return $this->db->get_where('kremasi', ['no_reg' => $id])->row_array();
        }

        public function ubah_data_kremasi($id){
			$newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'pemohon' => $this->input->post('pemohon', true),
                'nik' => $this->input->post('nik', true),
                'kk' => $this->input->post('kk', true),
                'jk' => $this->input->post('jk', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
                'status' => $this->input->post('status', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),

                'alm' => $this->input->post('alm', true),
                'tempat_lhr' => $this->input->post('tempat_lhr', true),
                'tgl_lhr' => $this->input->post('tgl_lhr', true),
                'agama_alm' => $this->input->post('agama_alm', true),
                'alamat_alm' => $this->input->post('alamat_alm', true),

                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'reg_rw' => $this->input->post('reg_rw', true),
                'tgl_reg' => $this->input->post('tgl_reg', true),

                'rs' => $this->input->post('rs'),
                'tgl_wafat' => $this->input->post('tgl_wafat'),
                'krematorium' => $this->input->post('krematorium'),
                'tgl_kremasi' => $this->input->post('tgl_kremasi')
            );
			$this->db->where('kremasi.no_reg', $id);
			return $this->db->update('kremasi', $newdata);
        }
    }
?>