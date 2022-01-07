<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class diskusi extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('diskusiModel');
		}
		public function index(){
			$data = [];
			$data['dataDiskusi']= $this->diskusiModel->get_all_diskusi();
			$data['dataPertanyaan']= $this->diskusiModel->get_all_pertanyaan();
			$this->load->view('DiskusiPage', $data);
		}
		public function tambahDiskusi(){
			$data = array(
				'id_diskusi' => 'NULL',
				'namaPengguna' => $this->session->userdata('userTrack'),
				'kategori' => $this->input->post('katTambah'),
				'pertanyaan' => $this->input->post('pertanyaanTambah'),
				'jam' => date("h:i:sa"),
				'tanggal' => date("Y/m/d")
			);
			$this->diskusiModel->posting($data, 'diskusi');
			redirect('history');
		}
	}
?>
