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
	}
?>
