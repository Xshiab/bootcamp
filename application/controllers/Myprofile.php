<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myprofile extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/myprofile', $data);
        $this->load->view('user/footer');
    } 
}
