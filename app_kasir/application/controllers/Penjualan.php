<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
		function __construct() 
    {
        parent::__construct();
        check_not_login();      
        $this->load->model('p_model');
        
    }

	public function index()
	{
		$data = array(
			'history' => $this->p_model->get_transaksi(),
			);
		$this->template->load('template','transaksi/penjualan/p_data', $data);
	}
	public function detail($kode_transaksi) {
		$data = array(
			'detail' => $this->p_model->get_detail($kode_transaksi),
			'kode_transaksi' =>$this->p_model->get_detail($kode_transaksi),
			);
		$this->template->load('template','transaksi/penjualan/detail', $data);
	}

	public function tambah()
	{
		$penjualan = new stdClass();
		$penjualan->id = null;
		$penjualan->code_transaksi	 = null;
		$penjualan->nama_barang = null;
		$penjualan->code = null;
		$penjualan->jumlah = null;
		$penjualan->harga = null;
		$penjualan->update = null;
		$data = array(
			'page' => 'tambah',
			'row' => $penjualan
		
		);
		
		$post = $this->input->post();
		if(isset($_POST['tambah']));{
			$post = [
	            'nama_barang' => $post['penjualan'],
	            'code' => $post['kode'],
	            'kode_transaksi' => $post['code_transaksi'],
	            'jumlah' => $post['jmlh'],
	            'harga' => $post['total'],
	            'update' => date('Y-m-d H:i:s')
        	];

			$this->p_model->tambah($post);
			$data = array(
			'page' => 'tambah',
			'code_transaksi' => $this->input->post('code_transaksi'),
			'row' => $this->p_model->get_where($this->input->post('code_transaksi')),
		);
			$this->template->load('template','transaksi/penjualan/p_data', $data );
		}	
		// $this->template->load('template','transaksi/penjualan/p_data',$data);
	}

	public function edit($id) 
	{
		// $query = $this->p_model->get($id);
		// if($query->num_rows() > 0) {	
		// 	$penjualan = $query->row();
		$penjualan = new stdClass();
		$penjualan->id = null;
		$penjualan->nama_barang = null;
		$penjualan->code = null;
		$penjualan->jumlah = null;
		$penjualan->harga = null;
		$penjualan->update = null;
			$data = array(
				'page' => 'edit',
				'row' => $penjualan
			);
			if(isset($_POST['edit'])){ 
			$this->p_model->edit($post);
		}
			$this->template->load('template','transaksi/penjualan/p_form',$data);
		
			// echo "<script>alert('Data tidak ditemukan');";
   //          echo "window.location='".site_url('penjualan')."';</script>";
	
	}

// 	public function proses()
// 	{
		 
// 	  // echo "<script>window.location='".site_url('penjualan')."';</script>";
	
// }
	public function del($id)
	{	
		$data = array(
			'history' => $this->p_model->get_transaksi(),
			);
		$this->p_model->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
	  }
	  echo "<script>window.location='".site_url('penjualan')."';</script>";
	}

	public function kategori()
	{
		echo json_encode($this->db->get('p_category')->result());
	}

	public function item($id)
	{
		echo json_encode($this->db->get_where('p_item', array('category_id' => $id))->result());
	}

	public function code($id)
	{
		echo json_encode($this->db->get_where('p_item', array('item_id' => $id))->row());
	}

}

?>
