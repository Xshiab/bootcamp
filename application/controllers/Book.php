<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/header', $data);
        $this->load->view('user/book', $data);
        $this->load->view('user/footer', $data);
    }

    public function booking()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'id_user' => $this->session->userdata('id_user'),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'address' => htmlspecialchars($this->input->post('address', true)),
            'id_paket' => htmlspecialchars($this->input->post('id_paket', true)),
            'guests' => htmlspecialchars($this->input->post('guests', true)),
            'arrivals' => htmlspecialchars($this->input->post('arrivals', true)),
            'leaving' => htmlspecialchars($this->input->post('leaving', true)),

        ];

        $this->db->insert('book', $data);
        redirect('book');
    }

    public function mybook()
    {
        $data['tiket_user'] = $this->M_tiket->tiket_user();

        $data['user'] = $this->db->get_where('book', ['email' =>
        $this->session->userdata('email')])->row_array();



        $this->load->view('user/header' , $data );
        $this->load->view('user/mybook' , $data );
        $this->load->view('user/footer' );
    }

    public function delete_data()
    {
        $this->db->where('id');
        $this->db->delete('Book');
        redirect('book/mybook');
    }

    public function transaksi($id)
    {
        $data['user'] = $this->db->get_where('book', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tiket'] = $this->M_tiket->get_id_book($id)->row_array();
        
        $this->load->view('user/header' , $data );
        $this->load->view('user/transaksi' , $data );
        $this->load->view('user/footer' );
    }

    public function etiket($id)
    {
        $data['user'] = $this->db->get_where('book', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $data['tiket'] = $this->M_tiket->etiket($id)->row_array();

        //$this->load->view('user/header' , $data );
        $this->load->view('user/etiket' , $data );
        //$this->load->view('user/footer' );
    }

    public function cancel($id)
    {
        $cancel = $this->M_tiket->get_id_book($id);
        
        if($cancel)
        {
            $this->M_tiket->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> tiket berhasil dihapus</div>');
            redirect('book/mybook', 'refresh');

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"> tiket tidak ada </div>');
            redirect('book/mybook', 'refresh');

        }
    }

    public function etiket_pdf($id)
    {
        $data['user'] = $this->db->get_where('book', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $data['tiket'] = $this->M_tiket->etiket($id)->row_array();

        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/pustaka-booking/application/third_party/dompdf/autoload.inc.php";

        $dompdf = new Dompdf\Dompdf();
        $this->load->view('user/etiket_pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'potrait'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();

        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("Etiket - KD.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function etiket_print($id)
    {
        $data['user'] = $this->db->get_where('book', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $data['tiket'] = $this->M_tiket->etiket($id)->row_array();

        $this->load->view('user/etiket_print' , $data );
 
    }
}
