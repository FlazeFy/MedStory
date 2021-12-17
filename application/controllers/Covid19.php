<?php
defined('BASEPATH') or exit('No direct script access alowed');

class Covid19 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('V_Covid19');
    }
}
