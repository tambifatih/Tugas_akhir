<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_in extends CI_Controller {
		function __construct() 
    {
        parent::__construct();
        check_not_login();      
        $this->load->model('stok_in_m');
        $this->load->model('item_m');
    }

	public function index()
	{
		$data['row'] = $this->stok_in_m->get();
		$this->template->load('template','transaksi/stok_in/stok_in_data', $data);
	}

	//fungsi file stok_in_form stok_in tambah sekaligus edit
	public function add()
	{
		
		$stok_in = new stdClass();
		$stok_in->stok_in_id = null;
		$stok_in->item_id = null;
		$stok_in->stock_in = null;
		$stok_in->tanggal = null;
		$data = array(
			'page' => 'add',
			'row' => $stok_in
		);
		$data["item"] = $this->db->get("p_item")->result();
		$this->template->load('template','transaksi/stok_in/stok_in_form',$data);
	}

	public function edit($id) 
	{
		$query = $this->stok_in_m->get($id);
		if($query->num_rows() > 0) {	
			$stok_in = $query->row();
			$query_item = $this->item_m->get();

			$data = array(
				'page' => 'edit',
				'row' => $stok_in,
				'category' => $query_item,
			);
			$data["item"] = $this->db->get("p_item")->result();
			$this->template->load('template','transaksi/stok_in/stok_in_form',$data);
		} else {
			echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('stok_in')."';</script>";
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->stok_in_m->add($post);	
		} else if(isset($_POST['edit'])) 
			$this->stok_in_m->edit($post);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
	  }
	  echo "<script>window.location='".site_url('stok_in')."';</script>";
	
}
	public function del($id)
	{	
		$this->stok_in_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
	  }
	  echo "<script>window.location='".site_url('stok_in')."';</script>";
	}
}


?>
