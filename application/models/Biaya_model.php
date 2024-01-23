<?php
    class  Biaya_model  extends  CI_Model  {

    
        public function getAllUMR() {
            $this->db->select('total_banyak.id, total_banyak.umr, total_banyak.total_banyak, kode_pekerjaan.nama_pekerjaan, nama_kota.nama_kota');
            $this->db->from('total_banyak');
            $this->db->join('kode_pekerjaan', 'total_banyak.id_pekerjaan = kode_pekerjaan.id_nama_pekerjaan');
            $this->db->join('nama_kota', 'total_banyak.id_kota = nama_kota.id_kota');
            $query = $this->db->get();
            return $query->result_array();
        }
        

        public function getAllKota(){
            return $this->db->get('nama_kota')->result_array();
        }

        public function tambahDataUMR()
        {
            $data = [
                "id_pekerjaan" => $this->input->post('nama_pekerjaan', true),
                "id_kota" => $this->input->post('nama_kota', true),
                "total_banyak" => $this->input->post('total_pekerja', true),
                "umr" => $this->input->post('umr', true),
            ];

            $this->db->insert('total_banyak', $data ); 
        }

        public function hapusDataUMR($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('total_banyak');
        }

        public function getUMRById($id)
        {
            return $this->db->get_where('total_banyak', ['id' => $id])->row_array();
        }

        public function ubahDataUMR()
    {
        $data = [
            "id_pekerjaan" => $this->input->post('nama_pekerjaan', true),
            "id_kota" => $this->input->post('nama_kota', true),
            "total_banyak" => $this->input->post('total_pekerja', true),
            "umr" => $this->input->post('umr', true),
        ];

        $this->db->where('id', $this->input->post('idUMR'));
        $this->db->update('total_banyak', $data);
    }

        // public function carigetAllUMR()
        // {
        //     $keyword = $this->input->post('keyword', true);
        //     $this->db->like('umr', $keyword);
        //     return $this->db->get('total_banyak')->result_array();
        // }
    }