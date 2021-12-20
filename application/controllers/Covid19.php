<?php
defined('BASEPATH') or exit('No direct script access alowed');

class Covid19 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Covid19');
    }
    public function index()
    {
        $data['Hospital'] = $this->M_Covid19->getAllHospital();
        $data['Vaksinasi'] = $this->M_Covid19->getAllVaksinasi();
        $this->load->view('V_Covid19', $data);
    }
}
