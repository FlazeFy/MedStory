<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class landing extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('landingModel');
		}
		 
		public function index(){
			$data = [];
			$this->load->view('LandingPage', $data);
		}
		/*Insert*/
		public function savedata()
		{
			$id_login = "NULL";
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'id_login' => $id_login,
				'username' => $username,
				'password' => $password
			);
			$this->landingModel->recordlogin($data, 'loginuser');
			redirect('history');
		}
	}
?>
