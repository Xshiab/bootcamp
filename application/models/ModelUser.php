<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{

    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
    

    public function user()
    {
        $db = $this->db->get('book')->result_array();
        
        foreach ($db as $d)
        {

        $data = [
            'id'=> $d['id'],
            'username'=> $d['email'],
            'nama'=> $d['name'] ,
            'level'=> $d['id']
            ];
        }
        $this->session->set_userdata($data);
    }


    //manajemen paket
    public function joinBookPaket()
    {
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('book', 'book.id_paket = paket.id_paket');
        return $this->db->get();

    }

    public function joinUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('book', 'book.id_user = user.id_user');
        return $this->db->get();

    }









    public function koneksi()
    {
        $connection = mysqli_connect('localhost', 'root', '', 'db_travelmbs');
        $query = mysqli_query($connection, "SELECT * FROM paket") or die (mysqli_error($connection));
    }
    public function getPaket()
    {
        return $this->db->get('paket');
    }

    public function paketWhere($where)
    {
        return $this->db->get_where('paket', $where);
    }

    public function simpanPaket($data = null)
    {
        $this->db->insert('paket',$data);
    }

    public function updatePaket($data = null, $where = null)
    {
        $this->db->update('paket', $data, $where);
    }

    public function hapusPaket($where = null)
    {
        $this->db->delete('paket', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('paket');
        return $this->db->get()->row($field);
    }
}
