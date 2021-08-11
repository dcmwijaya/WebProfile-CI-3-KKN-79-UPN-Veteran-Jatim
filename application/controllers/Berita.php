<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function post1()
    {
        $data = [
            'judul' => 'Pembekalan KKN Tematik Bela Negara 2021 UPN Veteran Jatim | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post1');
        $this->load->view('layout/footer');
    }

    public function post2()
    {
        $data = [
            'judul' => 'Pemberangkatan KKN Tematik Bela Negara 2021 UPN Veteran Jatim | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post2');
        $this->load->view('layout/footer');
    }

    public function post3()
    {
        $data = [
            'judul' => 'Survei KKN Tematik UPN "Veteran" Jawa Timur di Daerah Gresik | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post3');
        $this->load->view('layout/footer');
    }

    public function post4()
    {
        $data = [
            'judul' => 'Pembukaan KKN oleh pihak Kelurahan dan RW Tlogo Patut, Gresik | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post4');
        $this->load->view('layout/footer');
    }

    public function post5()
    {
        $data = [
            'judul' => 'Edukasi Cegah Hoax di Masa Pandemi | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post5');
        $this->load->view('layout/footer');
    }

    public function post6()
    {
        $data = [
            'judul' => 'Edukasi Pemasaran Produk Secara Online | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post6');
        $this->load->view('layout/footer');
    }

    public function post7()
    {
        $data = [
            'judul' => 'Manfaat dan Cara Pengolahan Tanaman Toga | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post7');
        $this->load->view('layout/footer');
    }

    public function post8()
    {
        $data = [
            'judul' => 'Edukasi Seputar COVID-19 | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post8');
        $this->load->view('layout/footer');
    }

    public function post9()
    {
        $data = [
            'judul' => 'Sosialisasi Ketahanan Pangan Via Whatsapp | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post9');
        $this->load->view('layout/footer');
    }

    public function post10()
    {
        $data = [
            'judul' => 'Pemasangan Poster & Penyerahan Alat PROKES | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post10');
        $this->load->view('layout/footer');
    }

    public function post11()
    {
        $data = [
            'judul' => 'Sosialisasi Covid-19 Kepada Masyarakat Tlogo Patut, Gresik | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post11');
        $this->load->view('layout/footer');
    }

    public function post12()
    {
        $data = [
            'judul' => 'Edukasi Pembuatan Hidroponik Verikultur Galon & Botol Bekas | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post12');
        $this->load->view('layout/footer');
    }

    public function post13()
    {
        $data = [
            'judul' => 'Sosialisasi Teknologi Tepat Guna Hidroponik Sayur | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post13');
        $this->load->view('layout/footer');
    }

    public function post14()
    {
        $data = [
            'judul' => 'Pemasangan Banner & Pengemasan Produk Terbaru | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post14');
        $this->load->view('layout/footer');
    }

    public function post15()
    {
        $data = [
            'judul' => 'Penyerahan Alat Hidroponik & Penanaman Sayuran | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post15');
        $this->load->view('layout/footer');
    }

    public function post16()
    {
        $data = [
            'judul' => 'Penyerahan Aplikasi Berbasis Digital Tingkat Sekolah Dasar | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('berita/post16');
        $this->load->view('layout/footer');
    }
}