<?php
    class Serbaguna_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function tambah_data(){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'nama' => $this->input->post('nama', true),
                'nik' => $this->input->post('nik', true),
                'kk' => $this->input->post('kk', true),
                'jk' => $this->input->post('jk', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
                'status_perkawinan' => $this->input->post('status_perkawinan', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),
                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'ket' => $this->input->post('keterangan', true),
                'untuk' => $this->input->post('untuk', true),
                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'reg_rw' => $this->input->post('reg_rw', true),
                'tgl_reg' => $this->input->post('tgl_reg', true)
            );
            
            $this->db->insert('serbaguna',$newdata);
        }

        public function tampilkan(){
            $last_id =  $this->db->query("select no_reg from serbaguna order by dibuat_pada desc")->row_array();
            $baru = $last_id['no_reg'];
            return $this->db->get_where('serbaguna', ['no_reg' => $baru])->result_array();
        }

        public function get_sg($id = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
				$this->db->limit($limit, $offset);
            }
            if ($id == FALSE) {
                return $this->db->get('serbaguna')->result_array();
            }
            $query = $this->db->get('serbaguna', array('no_reg' => $id));
			return $query->row_array();
        }

        public function get_sg_by_id($id){
            return $this->db->get_where('serbaguna', ['no_reg' => $id])->row_array();
        }

        public function ubah_data_sg($id){
			$newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'nama' => $this->input->post('nama', true),
                'nik' => $this->input->post('nik', true),
                'kk' => $this->input->post('kk', true),
                'jk' => $this->input->post('jk', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
                'status_perkawinan' => $this->input->post('status_perkawinan', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),
                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'ket' => $this->input->post('keterangan', true),
                'untuk' => $this->input->post('untuk', true),
                'rt' => $this->input->post('rt', true),
                'rw' => $this->input->post('rw', true),
                'reg_rw' => $this->input->post('reg_rw', true),
                'tgl_reg' => $this->input->post('tgl_reg', true)
            );
			$this->db->where('serbaguna.no_reg', $id);
			return $this->db->update('serbaguna', $newdata);
        }
    }
?>