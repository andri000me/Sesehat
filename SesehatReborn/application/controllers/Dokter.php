<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('pages/dokter_ListJanjian');
    }

    public function status_konsultasi()
    {
        $this->load->view('pages/dokter_ListStatusKonsultasi');
    }

    public function profile_akunDokter()
    {
        $this->load->view('pages/dokter_ProfilAkun');
    }
}
