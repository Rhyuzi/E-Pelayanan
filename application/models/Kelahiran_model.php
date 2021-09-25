<?php
    class Kelahiran_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function tambah_data(){
            $newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'tgl_lahir' => $this->input->post('tanggal_lahir', true),
                'jam' => $this->input->post('jam_lahir', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'jk' => $this->input->post('kelamin', true),
                'nama_anak' => $this->input->post('nama', true),
                'nama_ibu' => $this->input->post('nama_ibu', true),
                'alamat' => $this->input->post('alamat', true),
                'nama_ayah' => $this->input->post('nama_ayah', true),
                'tempat_nikah' => $this->input->post('tempat_nikah', true),
                'tgl_nikah' => $this->input->post('tanggal_nikah', true),
                'no_buku' => $this->input->post('no_buku', true)
            );
            
            $this->db->insert('kelahiran',$newdata);
        }

        public function tampilkan(){
            $last_id =  $this->db->query("select no_reg from kelahiran order by dibuat_pada desc")->row_array();
            $baru = $last_id['no_reg'];
            return $this->db->get_where('kelahiran', ['no_reg' => $baru])->result_array();
        }

        public function get_kl($id = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
				$this->db->limit($limit, $offset);
            }
            if ($id == FALSE) {
                $this->db->order_by('kelahiran.dibuat_pada', 'DESC');
                return $this->db->get('kelahiran')->result_array();
            }
            $query = $this->db->get('kelahiran', array('no_reg' => $id));
			return $query->row_array();
        }

        public function get_kl_by_id($id){
            return $this->db->get_where('kelahiran', ['no_reg' => $id])->row_array();
        }

        public function ubah_data_kl($id){
			$newdata = array(
                'no_reg' => $this->input->post('no_reg', true),
                
                'tgl_lahir' => $this->input->post('tanggal_lahir', true),
                'jam' => $this->input->post('jam_lahir', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'jk' => $this->input->post('kelamin', true),
                'nama_anak' => $this->input->post('nama', true),
                'nama_ibu' => $this->input->post('nama_ibu', true),
                'alamat' => $this->input->post('alamat', true),
                'nama_ayah' => $this->input->post('nama_ayah', true),
                'tempat_nikah' => $this->input->post('tempat_nikah', true),
                'tgl_nikah' => $this->input->post('tanggal_nikah', true),
                'no_buku' => $this->input->post('no_buku', true)
            );
			$this->db->where('kelahiran.no_reg', $id);
			return $this->db->update('kelahiran', $newdata);
        }
    }
?>