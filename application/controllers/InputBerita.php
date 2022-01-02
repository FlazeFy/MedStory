<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InputBerita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model "Mahasiswa_model"
        //load library form validation
        $this->load->model('Input_Berita_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['dataBerita'] = $this->Input_Berita_model->getBerita();
        $this->load->view('berita/berita', $data);
        $this->load->view('templates/footer');
    }

    public function berita()
    {
        $namaberita = $this->input->post('namaberita');
        $tanggal = $this->input->post('tanggal');
        $isiberita = $this->input->post('isiberita');

        $initialize = $this->upload->initialize(array(
            "upload_path" => './assets/uploads',
            "allowed_types" => 'gif|jpg|png|jpeg',
            "remove_spaces" => TRUE,
            "file_name" => time() . '-' . $_FILES["uploadImage"]['name']
        ));
        if (!$this->upload->do_upload('uploadImage')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('Berita', $error);
        } else {
            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $data = array(
                'namaberita' => $namaberita,
                'tanggal' => $tanggal,
                'fotoberita' => $imagename,
                'isiberita' => $isiberita
            );
            $result = $this->Input_Berita_model->tambahBerita($data);
            if ($result) {
                // KERJAKAN DISINI
                $this->session->set_userdata('userTrack', $data['namaberita']);
                $this->session->set_userdata('imageURL', $imagename);
                redirect('InputBerita');
            } else {
                //KERJAKAN DISINI
                $data['error_message'] = "Error Upload";
                redirect('InputBerita', $data);
            }
        }
    }
    public function edit_Berita($id_berita, $data)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->update('berita', $data);
        redirect('InputBerita');
    }
    public function hapus_Berita($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->delete('berita');
        redirect('InputBerita');
    }
}
