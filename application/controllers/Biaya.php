<?php

class Biaya extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Biaya Ekonomi';
        $data['umr'] = $this->Biaya_model->getAllUMR();
        
        // if( $this->input->post('cari') ) {
        //     $data['umr'] = $this->Biaya_model->carigetAllUMR();
        // }
        
        $this->load->view('templates/header', $data);
        $this->load->view('biaya/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Biaya';
        $data['kota'] = $this->Biaya_model->getAllKota();
        $this->load->view('templates/header', $data);
        $this->load->view('biaya/tambah');
        $this->load->view('templates/footer');
        
        if($this->input->post("tambah")){
            $this->Biaya_model->tambahDataUMR();     
            redirect('index.php/biaya');
        }

    }
    public function hapus($id)
    {
        $this->Biaya_model->hapusDataUMR($id);
        redirect('biaya'); 
    }
    
    public function edit($id)
    {
        $data['judul'] = 'Form Edit Data Biaya';
        $data['kota'] = $this->Biaya_model->getAllKota();
        $data['umr'] = $this->Biaya_model->getUMRById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('biaya/edit');
        $this->load->view('templates/footer');

        if($this->input->post("edit")){
            $this->Biaya_model->ubahDataUMR();     
            redirect('biaya');
        }

    }


}