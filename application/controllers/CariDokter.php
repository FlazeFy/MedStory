<?php
defined('BASEPATH') or exit('No direct script access alowed');

class CariDokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('V_CariDokter');
    }
}
