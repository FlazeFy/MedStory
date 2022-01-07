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
		public function hapus()
		{
			$data = array(
				'username' => $this->session->userdata('userTrack'),
				'password' => $this->input->post('password')
			);
			$this->historyModel->hapusData($data, 'kodeBooking');
			redirect('history');
		}
		public function daftar()
		{
			//Buat kode booking random.
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$kode = '';
			$i = 0;
			while ($i < 6) {
				$index = rand(0, strlen($characters) - 1);
				$kode .= $characters[$index];
				$i++;
			}

			//Split string.
			$dokterTambah = $this->input->post('dokterTambah');
			list($namaDokter, $spesialis, $lokasi) = explode(":", $dokterTambah);
			$data = array(
				'id_konsultasi' => 'NULL',
				'kodeBooking' => $kode,
				'namaPengguna' => $this->session->userdata('userTrack'),
				'spesialis' => $spesialis,
				'namaDokter' => $namaDokter,
				'lokasi' => $lokasi,
				'jam' => $this->input->post('jamTambah'),
				'tanggal' => $this->input->post('tanggalTambah')
			);
			$this->historyModel->daftarBerobat($data, 'konsultasi');
			redirect('history');
		}
	}
?>
