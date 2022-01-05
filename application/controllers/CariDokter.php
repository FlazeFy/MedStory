<?php
defined('BASEPATH') or exit('No direct script access alowed');

class CariDokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Dokter');
    }
    public function index()
    {
        $data['Hospital'] = $this->M_Dokter->getAllHospital();
        $this->load->view('V_CariDokter', $data);
    }
}
