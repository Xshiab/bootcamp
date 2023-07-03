<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'MBS Travel - Admin ';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/visimisi');
        $this->load->view('templates/footer');
    }

    public function paket()
    {
        $data['title'] = 'MBS Travel';
        $data['paket'] = $this->ModelPaket->getPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/paket', $data);
        $this->load->view('templates/footer');
    }

    public function ubahpaket()
    {
        $data['title'] = 'MBS Travel';
        $data['paket'] = $this->ModelPaket->getPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/ubahpaket', $data);
        $this->load->view('templates/footer');

    }

    public function tambahpaket()
    {
        $data = [
            'tujuan' => $this->input->post('tujuan'),
            'waktu' => $this->input->post('waktu'),
            'price' => $this->input->post('price'),
        ];
    
        $this->ModelPaket->simpanPaket($data);
        redirect('admin/paket');
    }

    public function hapuspaket($id)
    {
        $cancel = $this->ModelPaket->hapuspaket($id);
        
        if($cancel)
        {
            $this->M_tiket->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> tiket berhasil dihapus</div>');
            redirect('admin/paket', 'refresh');

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"> tiket tidak ada </div>');
            redirect('admin/paket', 'refresh');

        }
    }


}
