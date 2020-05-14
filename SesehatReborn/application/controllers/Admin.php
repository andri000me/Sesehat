<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        $data_user = $query->result();
        // $data['user'] = $this->db->get_where('user', ['username' =>
        // $this->session->userdata('username')])->result();

        $this->load->view('pages/admin_ListAkunUser', ['datauser' => $data_user]);
    }

    public function verifikasi_dokter()
    {
        $this->load->view('pages/admin_VerifikasiDokter');
    }

    public function profile_akunAdmin()
    {
        $this->load->view('pages/admin_ProfilAkun');
    }
    public function delete($id)
    {
        $this->db->delete("user", array("id" => $id));
        redirect('/Admin');
    }
    public function Update($id)
    {
        $data = [
            'nama' => $this->input->post('Nama_Obat'),
            'nohp' => $this->input->post('Harga'),
            'nohp' => $this->input->post('Description'),
            'password' => $this->upload->data()['file_name']
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('Product');
        $this->db->delete("user", array("id" => $id));
        redirect('/Admin');
    }
}
