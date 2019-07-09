<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_in_m extends CI_Model {
    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('stok_in');
        $this->db->join('p_item', 'p_item.item_id = stok_in.item_id');
        if($id != null) {
        $this->db->where('stok_in_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $barang = $this->db->get_where("p_item", array("barcode" => $post['barcode']))->row_array();
        $this->db->select('*');
        
        
        $params = [
            'item_id' => $barang['item_id'],
            'stock_in' => $post['stock'],
            'tanggal' => $post['tanggal'],            
        ];      
        $this->db->insert('stok_in',$params);
    }

    public function edit($post)
    {
        $barang = $this->db->get_where("p_item", array("barcode" => $post['barcode']))->row_array();
        $this->db->select('*');
        
        $params = [
            'item_id' => $barang['item_id'],
            'stock_in' => $post['stock'],
            'tanggal' => $post['tanggal'],
        ];
        $this->db->where('stok_in_id',$post['id']);
        $this->db->update('stok_in', $params);
    }

    public function del($id)
    {
        $this->db->where('stok_in_id', $id);
        $this->db->delete('stok_in');
    }
}
?>  