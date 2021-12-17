<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class createAcc extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('createAccModel');
		}
		public function index(){
			$data = [];
			$this->load->view('CreateAccPage', $data);
		}
		/*Insert Buat akun*/
		public function newUser(){
			$data = array(
				//Data diri
				"namaLengkap" => $this->input->post('fullname'),
				"nik" => $this->input->post('nik'),
				"tempatLahir" => $this->input->post('tLahir'),
				"tanggalLahir" => $this->input->post('tglLahir'),
				"alamat" => $this->input->post('add'),
				"pekerjaan" => $this->input->post('job'),
				"tinggiBadan" => $this->input->post('tBadan'),
				"beratBadan" => $this->input->post('bBadan'),
				//Data akun
				"namaPengguna" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"nomorPonsel" => $this->input->post('ponsel'),
				"password" => $this->input->post('password')
			);
			$this->createAccModel->buat($data, 'pengguna');
		}
	}
?>
