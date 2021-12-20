<?php
class M_Covid19 extends CI_Model
{
    public function getAllHospital()
    {
        #Memanggil data dari database, dan return hasilnya
        $data = $this->db->get('hospital');
        return $data->result_array();
    }
    public function getAllVaksinasi()
    {
        #Memanggil data dari database, dan return hasilnya
        $data = $this->db->get('vaksinasi');
        return $data->result_array();
    }
}
