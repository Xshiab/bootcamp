<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutadmin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/header');
        $this->load->view('user/about');
        $this->load->view('user/footer');
        $this->load->view('templates/footer');
    }
}
