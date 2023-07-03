<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    public function index()
    {
        //$data['tiket'] = $this->M_tiket->SemuaData();

        $data['title'] = 'MBS Travel';
        $this->load->model('ModelUser');
        $data['tiket'] = $this->ModelUser->joinBookPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tiket', $data);
        $this->load->view('templates/footer');
    }

    public function delete_data($id)
    {
        $this->M_tiket->delete_data($id);
        redirect('tiket');
    }

    public function edit_data($id)
    {
        $data['title'] = 'MBS Travel';
        $this->load->model('ModelUser');
        $data['a'] = $this->ModelUser->joinBookPaket()->row_array();
        $data['b'] = $this->M_tiket->etiket($id)->row_array();
       
        $data['tiket'] = $this->M_tiket->ambil_id_tiket($id);

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tiket/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_data($id)
    {
        $this->M_tiket->proses_edit_data($id);
        redirect('tiket');
    }

    public function save_tiket()
    {
        

        $data = array(
            'status_payment' => $this->input->post('status_payment')
        );
        
        $this->M_tiket->update($this->input->post('id'), $data);
        redirect('tiket', 'refresh');
    }

    public function save_tiket1($id)
    {
        $id = $this->uri->segment(3);
        $no_pinjam = $this->uri->segment(4);
        $where = ['id_buku' => $this->uri->segment(3),];
        
        $tgl = date('Y-m-d');
        $status = '1';
        //update status menjadi kembali pada saat buku dikembalikan
        $this->db->query("UPDATE book SET book.status_payment='$status' WHERE book.id='$id'");
        redirect('tiket');
 
 
        
    }
}
