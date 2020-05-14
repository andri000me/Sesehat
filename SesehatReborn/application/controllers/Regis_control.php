<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regis_control extends CI_Controller
{
    public function index()
    {
        $this->load->view('pages/register');
    }
}
