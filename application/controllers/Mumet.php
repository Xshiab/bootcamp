<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mumet extends CI_Controller
{

    public function index()
    {

        $this->load->view('user/header');
        $this->load->view('mumet');
        $this->load->view('user/footer');
    }
}
