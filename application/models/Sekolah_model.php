<?php
    class Sekolah_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function tambah_data(){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'pemohon' => $this->input->post('pemohon', true),
                'tempat_lhr' => $this->input->post('tempat_lhr', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'alamat' => $this->input->post('alamat', true),
                'kk' => $this->input->post('kk', true),

                'anak' => $this->input->post('anak', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'sekolah' => $this->input->post('sekolah', true),

                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'reg_rw' => $this->input->post('reg_rw', true),
                'tgl_reg' => $this->input->post('tgl_reg', true)
            );
            
            $this->db->insert('sekolah',$newdata);
        }

        public function tampilkan(){
            $last_id =  $this->db->query("select no_reg from sekolah order by dibuat_pada desc")->row_array();
            $baru = $last_id['no_reg'];
            return $this->db->get_where('sekolah', ['no_reg' => $baru])->result_array();
        }

        public function get_sekolah($id = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
				$this->db->limit($limit, $offset);
            }
            if ($id == FALSE) {
                return $this->db->get('sekolah')->result_array();
            }
            $query = $this->db->get('sekolah', array('no_reg' => $id));
			return $query->row_array();
        }

        public function get_sekolah_by_id($id){
            return $this->db->get_where('sekolah', ['no_reg' => $id])->row_array();
        }

        public function ubah_data_sekolah($id){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'pemohon' => $this->input->post('pemohon', true),
                'tempat_lhr' => $this->input->post('tempat_lhr', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'alamat' => $this->input->post('alamat', true),
                'kk' => $this->input->post('kk', true),

                'anak' => $this->input->post('anak', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'sekolah' => $this->input->post('sekolah', true),

                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'reg_rw' => $this->input->post('reg_rw', true),
                'tgl_reg' => $this->input->post('tgl_reg', true)
            );
			$this->db->where('sekolah.no_reg', $id);
			return $this->db->update('sekolah', $newdata);
        }
    }
?>