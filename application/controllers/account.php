<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class account extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('accountModel');
		}
		public function index(){
			$data = [];
			$data['dataUser']= $this->accountModel->get_data_user();
			$this->load->view('AccountPage', $data);
		}
		public function ubah(){
			$data = [
				"namaLengkap" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"nomorPonsel" => $this->input->post('nomorPonsel'),
				"password" => $this->input->post('password'),
				"alamat" => $this->input->post('alamat'),
				"pekerjaan" => $this->input->post('pekerjaan'),
				"tinggiBadan" => $this->input->post('tinggiBadan'),
				"beratBadan" => $this->input->post('beratBadan')
			];
			$this->accountModel->ubahData($data, 'pengguna');
			redirect('account');
		}
	}
?>
