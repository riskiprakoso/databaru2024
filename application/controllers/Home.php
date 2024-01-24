<?php

class Home extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Pendapatan Ekonomi';
        $data['sapa'] = $this->greet();
        
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }



private function greet() {
    date_default_timezone_set("Asia/Jakarta");
    $current_time = date("H:i:s");
    $morning_start = strtotime("06:00:00");
    $afternoon_start = strtotime("12:00:00");
    $night_start = strtotime("18:00:00");

    if ($morning_start <= strtotime($current_time) && strtotime($current_time) < $afternoon_start) {
        $sapa= "Selamat Pagi!";
    } elseif ($afternoon_start <= strtotime($current_time) && strtotime($current_time) < $night_start) {
        $sapa= "Selamat Sore";
    } else {
        $sapa= "Selamat Malam";
    }
    return $sapa;
}



}