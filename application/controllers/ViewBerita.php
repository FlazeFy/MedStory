<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewBerita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model "Mahasiswa_model"
        //load library form validation
        $this->load->model('Input_Berita_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['dataBerita'] = $this->Input_Berita_model->getBerita();
        $this->load->view('berita/viewberita', $data);
        $this->load->view('templates/footer');
    }
}
