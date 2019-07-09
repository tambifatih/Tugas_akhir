<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_out extends CI_Controller {
		function __construct() 
    {
        parent::__construct();
        check_not_login();      
        $this->load->model('stok_out_m');
        $this->load->model('item_m');
    }

	public function index()
	{
		$data['row'] = $this->stok_out_m->get();
		$this->template->load('template','transaksi/stok_out/stok_out_data', $data);
	}

	//fungsi file stok_in_form stok_in tambah sekaligus edit
	public function add()
	{
		
		$stok_out = new stdClass();
		$stok_out->stok_out_id = null;
		$stok_out->item_id = null;
		$stok_out->stock_out = null;
		$stok_out->detail = null;
		$stok_out->tanggal = null;
		$data = array(
			'page' => 'add',
			'row' => $stok_out);
		$data["item"] = $this->db->get("p_item")->result();
		$this->template->load('template','transaksi/stok_out/stok_out_form',$data);
	}

	public function edit($id) 
	{
		$query = $this->stok_out_m->get($id);
		if($query->num_rows() > 0) {	
			$stok_out = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $stok_out);
			$data["item"] = $this->db->get("p_item")->result();
			$this->template->load('template','transaksi/stok_out/stok_out_form',$data);
		} else {
			echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('stok_out')."';</script>";
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->stok_out_m->add($post);	
		} else if(isset($_POST['edit'])) 
			$this->stok_out_m->edit($post);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
	  }
	  echo "<script>window.location='".site_url('stok_out')."';</script>";
	
}
	public function del($id)
	{	
		$this->stok_out_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
	  }
	  echo "<script>window.location='".site_url('stok_out')."';</script>";
	}
}
?>
