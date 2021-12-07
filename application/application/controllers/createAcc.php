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
			$data = [
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
				"password" => $this->input->post('pass')
			];
			$this->createAccModel->buat($data, 'pengguna');
		}
		/*Insert Login*/
		public function savedata()
		{
			$id_login = "NULL";
			$username = $this->input->post('username');
			$password = $this->input->post('pass');

			$data = array(
				'id_login' => $id_login,
				'username' => $username,
				'password' => $password
			);
			$this->createAccModel->recordlogin($data, 'loginuser');
		}
		/*Create data kesehatan*/
		public function newHistory(){
			/*
			$fields = array(
				'idRiwayat' => array(
						'type' => 'INT',
						'constraint' => 5,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'blog_title' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
						'unique' => TRUE,
				),
				'blog_author' => array(
						'type' =>'VARCHAR',
						'constraint' => '100',
						'default' => 'King of Town',
				),
				'blog_description' => array(
						'type' => 'TEXT',
						'null' => TRUE,
				),
			);*/
		}
	}
?>
