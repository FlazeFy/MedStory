<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class history extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('historyModel');
		}
		public function index(){
			$data = [];
			$data['dataBerobat']= $this->historyModel->get_data_berobat();
			$data['dataBerita']= $this->historyModel->get_data_berita();
			$this->load->view('HistoryPage', $data);
		}
	}
?>
