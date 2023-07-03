<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tiket extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('book')->result_array();
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('Book');
    }

    public function ambil_id_tiket($id)
    {
        return $this->db->get_where('Book', ['id' => $id])->row_array();
    }

    public function prosess_edit_data()
    {
        $data = [
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "phone" => $this->input->post('phone'),
            "address" => $this->input->post('address'),
            "location" => $this->input->post('location'),
            "guests" => $this->input->post('guests'),
            "arrivals" => $this->input->post('arrivals'),
            "leaving" => $this->input->post('leaving')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('Book', $data);
    }


    public function tiket_user()
    {
        $this->db->where('book.id_user' , $this->session->userdata('id_user'));
        return $this->db->get('book')->result();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('Book');
    }

    public function get_id_book($id)
    {
        $this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('book', 'book.id_paket = paket.id_paket');
        return $this->db->get();

    }

    public function etiket($id)
    {
        $this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('book', 'book.id_paket = paket.id_paket');
        return $this->db->get();


    }

    public function update($id , $data)
    {
        $this->db->where('id' , $id);
        $this->db->update('book' , $data);
    }

    public function user_tiket()
    {
        $koneksi = mysqli_connect('localhost','root','','db_travelmbs');
        $a = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM book");
        $data = mysqli_fetch_array($a);
        $kodeBarang = $data['kodeTerbesar'];
        $urutan = (int) substr($kodeBarang, 3, 3);
        $urutan++;

        $huruf = "KD";
        $kodeBarang = $huruf . sprintf("%04s", $urutan);

        echo $kodeBarang;
    }

    
}
