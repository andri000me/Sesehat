<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_control extends CI_Controller
{
    public function login()
    {
        $this->load->view('pages/login');
    }
}
