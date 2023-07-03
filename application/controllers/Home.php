<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/footer', $data);    
    }

    public function book()
    {
        $connection = mysqli_connect('localhost', 'root', '', 'db_travelmbs');
        $data['title'] = 'MBS Travel';
        $data['user'] =$this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->ModelUser->getPaket();
        
        $this->load->view('user/header', $data);
        $this->load->view('user/book', $data);
        $this->load->view('user/footer', $data);
    }

    public function booking()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] =$this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'address' => htmlspecialchars($this->input->post('address', true)),
            'location' => htmlspecialchars($this->input->post('location', true)),
            'guests' => htmlspecialchars($this->input->post('guests', true)),
            'arrivals' => htmlspecialchars($this->input->post('arrivals', true)),
            'leaving' => htmlspecialchars($this->input->post('leaving', true)),
            'price' => 1,
            'pricetotal' => 1
        ];

        $this->db->insert('book', $data);
        redirect('book');
    }
}
