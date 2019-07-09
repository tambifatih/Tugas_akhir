<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_model extends CI_Model {
    public function get() 
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('p_item', 'penjualan.nama_barang = p_item.item_id');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_where($code_transaksi) {
        $this->db->where('kode_transaksi', $code_transaksi);
        $this->db->join('p_item', 'penjualan.nama_barang = p_item.item_id');
        return $this->db->get('penjualan')->result();
    } 

    public function get_transaksi() {
        $this->db->select('kode_transaksi, count(*) as jumlah, sum(harga) as total');
        $this->db->group_by('kode_transaksi');
        $this->db->order_by('kode_transaksi', 'desc');

        return $this->db->get('penjualan')->result();

    }

    public function get_detail($kode_transaksi) {
        $this->db->where('kode_transaksi', str_replace('%20', ' ',$kode_transaksi));
        $this->db->order_by('update', 'asc');
        $this->db->join('p_item', 'penjualan.nama_barang = p_item.item_id');

        return $this->db->get('penjualan')->result();
    }

    public function getById($id) 
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('p_item', 'penjualan.nama_barang = p_item.item_id');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function tambah ($post)
    {
               
        $this->db->insert('penjualan',$post);
    }

    public function edit($post)
    {
        $params = [
            'nama_barang' => $post['penjualan'],
            'code' => $post['kode'],
            'jumlah' => $post['jmlh'],
            'harga' => $post['price'],
            'update' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id',$post['id']);
        $this->db->update('penjualan', $params);
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penjualan');
    }
}
?>  