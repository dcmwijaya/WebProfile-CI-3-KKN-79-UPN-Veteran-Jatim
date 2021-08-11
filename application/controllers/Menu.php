<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    //Method Index
    public function index()
    {
        $data = [
            'judul' => 'KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('main/index');
        $this->load->view('layout/footer');
    }

    //Method Tentang
    public function tentang()
    {
        $data = [
            'judul' => 'Tentang | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('main/tentang');
        $this->load->view('layout/footer');
    }

    //Method Kontak
    public function kontak()
    {
        $data = [
            'judul' => 'Kontak | KKN 79 UPN VETERAN JATIM'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('main/kontak');
        $this->load->view('layout/footer');
    }
}