<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class historyModel extends CI_Model {
		//Riwayat kesehatan
		public function get_data_berobat(){
			$this->db->select('*');
			$this->db->from('riwayatkesehatan');
			$condition = $this->session->userdata('userTrack');
			$this->db->order_by('tanggal','DESC');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		//News Feed
		public function get_data_berita(){
			$data = $this->db->get('newsfeed');
			return $data->result_array();
		}
		//Data konsultasi
		public function get_data_konsultasi(){
			$this->db->select('*');
			$this->db->from('konsultasi');
			$condition = $this->session->userdata('userTrack');
			$this->db->order_by('tanggal','ASC');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		//Data pemeriksaan darah
		public function get_data_periksaD(){
			$this->db->select('*');
			$this->db->from('pemeriksaan_darah');
			$condition = $this->session->userdata('userTrack');
			$this->db->order_by('tanggal','ASC');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		//Data pemeriksaan penyakit
		public function get_data_periksaP(){
			$this->db->select('*');
			$this->db->from('pemeriksaan_penyakit');
			$condition = $this->session->userdata('userTrack');
			$this->db->order_by('tanggal','ASC');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		//Data dokter praktik
		public function get_data_praktik(){
			$data = $this->db->get('dokterpraktik');
			return $data->result_array();
		}
		//Ubah data konsultasi
		function ubahData($data)
		{
			$kode = $this->input->post('kodeBooking');
			$this->db->where('kodeBooking', $kode);
			$this->db->update('konsultasi', $data);
			redirect('history');
		}
		//Batalkan konsultasi
		public function hapusData($data)
		{
			//Mengecek ketersedian username.
			$this->db->select('*');
			$this->db->from('pengguna');
			$condition = array('namaPengguna' => $data['username'], 'password' => $data['password']);
			$this->db->where($condition);
			$userCheck = $this->db->get()->result();
			if(count($userCheck) == 1){
				$kode = $this->input->post('kodeBooking');
				$this->db->where('kodeBooking', $kode);
				$this->db->delete('konsultasi');
				redirect('history');
			}else{
				$data['error_message'] = "Delete failed";
				redirect('history');
			}
		}	
		//Daftar Berobat
		public function daftarBerobat($data){
			$this->db->insert('konsultasi',$data);	
			redirect('history');
		}
	}
?>
