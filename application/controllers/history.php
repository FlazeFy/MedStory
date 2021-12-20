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
			$data['dataKonsultasi']= $this->historyModel->get_data_konsultasi();
			$data['dataPraktik']= $this->historyModel->get_data_praktik();
			$data['dataPeriksaD']= $this->historyModel->get_data_periksaD();
			$data['dataPeriksaP']= $this->historyModel->get_data_periksaP();
			$this->load->view('HistoryPage', $data);
		}
		public function ubah(){
			$data = [
				"tanggal" => $this->input->post('tanggalTambah'),
				"jam" => $this->input->post('jamTambah')
			];
			$this->historyModel->ubahData($data, 'konsultasi');
			redirect('history');
		}
	}
?>
