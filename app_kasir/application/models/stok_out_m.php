<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_out_m extends CI_Model {
    public function get($id = null) 
    {
        $this->db->select('*');
        $this->db->from('stok_out');
        $this->db->join('p_item', 'p_item.item_id = stok_out.item_id');
        if($id != null) {
        $this->db->where('stok_out_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $barang = $this->db->get_where("p_item", array("barcode" => $post['barcode']))->row_array();
        
        $params = [
            'item_id' => $barang['cod'],
            'stock_out' => $post['jumlah'],
            'tanggal' => $post['id'],
            'detail' => $post['det'],            
        ];      
        $this->db->insert('stok_out',$params);
    }

    public function edit($post)
    {
        $barang = $this->db->get_where("p_item", array("barcode" => $post['barcode']))->row_array();
        $params = [
            'item_id' => $barang['cod'],
            'stock_out' => $post['jumlah'],
            'tanggal' => $post['id'],
            'detail' => $post['det'],            
        ];
        $this->db->where('stok_out_id',$post['id']);
        $this->db->update('stok_out', $params);
    }

    public function del($id)
    {
        $this->db->where('stok_out_id', $id);
        $this->db->delete('stok_out');
    }
}
?>  