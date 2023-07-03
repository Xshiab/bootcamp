<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packages extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'MBS Travel';
        $this->load->model('ModelUser');
        $data['tiket'] = $this->ModelUser->joinBookPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/header' , $data);
        $this->load->view('user/package' , $data);
        $this->load->view('user/footer');
    }
}
