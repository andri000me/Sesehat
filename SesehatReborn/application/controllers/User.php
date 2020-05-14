<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('pages/pasien_ListDokter');
    }

    public function info_dokter()
    {
        $this->load->view('pages/pasien_InfoDetailDokter');
    }

    public function profile_akun()
    {
        $this->load->view('pages/pasien_ProfileAkun');
    }
}
