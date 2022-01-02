<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		//load library form validation
		$this->load->model('Forum_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');

		$data['dataDiskusi'] = $this->Forum_model->getDiskusi();
		$data['dataBerita'] = $this->Forum_model->getBerita();
		$this->load->view('forum/forum', $data);

		$this->load->view('templates/footer');
	}

	public function inputDiskusi()
	{
		$data = [
			"diskusi" => $this->input->post('diskusi'),
			"tanggaldiskusi" => date('Y-m-d'),
		];
		$this->Forum_model->tambahDiskusi($data);
		redirect('Forum');
	}
}
