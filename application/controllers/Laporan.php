<?php

defined('BASEPATH') or exit('No Direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function laporan_paket()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->ModelPaket->getPaket()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporanpaket' , $data);
        $this->load->view('templates/footer');
    }

    public function cetak_laporan_paket()
    {
        $data['title'] = 'MBS Travel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->ModelPaket->getPaket()->result();

        $this->load->view('admin/print_laporan_paket' , $data);
        
    }

    public function laporan_paket_pdf()
    {
        $data['paket'] = $this->ModelPaket->getPaket()->result();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/pustaka-booking/application/third_party/dompdf/autoload.inc.php";
 
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan_pdf_paket', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape

        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_paket.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel()
    {
        $data = array( 'title' => 'Laporan Paket' , 'paket' => $this->ModelPaket->getPaket()->result());
        $this->load->view('admin/export_excel_paket', $data);
    }

    public function laporan_tiket()
    {
        $data['title'] = 'MBS Travel';
        $this->load->model('ModelUser');
        $data['tiket'] = $this->ModelUser->joinBookPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/laporan_tiket' , $data);
        $this->load->view('templates/footer');
    }

    public function cetak_laporan_tiket()
    {
        $data['title'] = 'MBS Travel';
        $this->load->model('ModelUser');
        $data['tiket'] = $this->ModelUser->joinBookPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('laporan/print_laporan_pinjam' , $data);
    }

    public function laporan_tiket_pdf()
    {
        $data['title'] = 'MBS Travel';
        $this->load->model('ModelUser');
        $data['tiket'] = $this->ModelUser->joinBookPaket()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/pustaka-booking/application/third_party/dompdf/autoload.inc.php";

        $dompdf = new Dompdf\Dompdf();
        $this->load->view('laporan/laporan_pdf_paket', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();

        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan data paket user.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
 
    }

    public function export_excel_tiket()
    {
        $data = array( 'title' => 'Laporan Data Tiket User' , 'tiket' => $this->ModelUser->joinBookPaket()->result());
        $this->load->view('laporan/export_excel_tiket', $data);


    }
}