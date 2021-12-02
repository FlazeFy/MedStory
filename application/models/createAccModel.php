<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class createAccModel extends CI_Model {
		//not finished
		public function get_data_diri(){
			$data = $this->db->get('');
			return $data->result_array();
		}
	}
?>
