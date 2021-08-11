<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul extends CI_Controller
{
    public function post1()
    {
        $data = [
            'judul' => 'Pelatihan Manajemen Informasi dan Konten Berbasis Digital Dengan Analisis SWOT (Strength-Weakness-Opportunities-Threats) | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post1');
        $this->load->view('layout/footer');
    }

    public function post2()
    {
        $data = [
            'judul' => 'Pemanfaatan Tanaman Toga untuk Meningkatkan Imunitas Tubuh di Masa Pandemi Covid-19 desa Tlogo Patut Gresik | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post2');
        $this->load->view('layout/footer');
    }

    public function post3()
    {
        $data = [
            'judul' => 'Pemanfaatan Pemasaran Digital Produk Usaha Mikro, Kecil, Dan Menengah (UMKM) Di Kelurahan Tlogopatut Kecamatan Gresik | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post3');
        $this->load->view('layout/footer');
    }

    public function post4()
    {
        $data = [
            'judul' => 'Inovasi Pembuatan Hidroponik Dari Galon Bekas Dan Hidroponik Vertikultur Botol Bekas | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post4');
        $this->load->view('layout/footer');
    }

    public function post5()
    {
        $data = [
            'judul' => 'Edukasi Pencegahan Penyebaran Covid-19 Serta Pentingnya Vaksinasi Melalui Media Poster & Sosialisasi | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post5');
        $this->load->view('layout/footer');
    }

    public function post6()
    {
        $data = [
            'judul' => 'Pembuatan Modul Pembelajaran Bahasa Indonesia Berbasis Digital Dan Interaktif | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post6');
        $this->load->view('layout/footer');
    }

    public function post7()
    {
        $data = [
            'judul' => ' | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('modul/post7');
        $this->load->view('layout/footer');
    }
}