<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function post1()
    {
        $data = [
            'judul' => 'Implementasi Aplikasi E-Commerce Daerah Gresik Berbasis Website | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('artikel_ilmiah/post1');
        $this->load->view('layout/footer');
    }

    public function post2()
    {
        $data = [
            'judul' => 'Pemanfaatan Tanaman Toga untuk Meningkatkan Imunitas Tubuh di Masa Pandemi Covid-19 desa Tlogo Patut Gresik | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('artikel_ilmiah/post2');
        $this->load->view('layout/footer');
    }

    public function post3()
    {
        $data = [
            'judul' => 'Strategi Pemasaran UMKM Tlogopatut Gresik “KKN Tematik Bela Negara Kelompok79” | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('artikel_ilmiah/post3');
        $this->load->view('layout/footer');
    }
}