<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class diskusiModel extends CI_Model 
	{
		public function get_all_diskusi()
		{
			$this->db->select('*');
			$this->db->from('diskusi');
			$this->db->order_by('tanggal','DESC');
			return $data = $this->db->get()->result_array();
		}
		public function get_all_pertanyaan()
		{
			$this->db->select('*');
			$this->db->from('diskusi');
			$condition = $this->session->userdata('userTrack');
			$this->db->where('namaPengguna',$condition);
			return $data = $this->db->get()->result_array();
		}
		public function posting($data){
			$this->db->insert('diskusi',$data);	
			redirect('diskusi');
		}
	}
?>
