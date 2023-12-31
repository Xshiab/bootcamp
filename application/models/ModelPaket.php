<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPaket extends CI_Model
{
    //manajemen buku
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

    public function hapusPaket($id_paket)
    {
        $this->db->where('id_paket', $id_paket);
        $this->db->delete('paket');
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
    
    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    public function joinKategoriBuku($where)
    {
        $this->db->from('buku');
        $this->db->join('kategori','kategori.id = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();

    }

    public function getLimitBuku()
    {
        $this->db->limit(5);
        return $this->db->get('buku');
    }
}