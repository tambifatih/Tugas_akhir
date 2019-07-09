<?php  //disetting diroute
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
		function __construct() 
    {
        parent::__construct();
        check_not_login();      
        $this->load->model('costumer_m');
        
    }

	public function index()
	{
		$data['row'] = $this->costumer_m->get();
		$this->template->load('template','costumer/costumer_data', $data);
	}

	//fungsi file supplier_form costumer tambah sekaligus edit
	public function add()
	{
		$costumer = new stdClass();
		$costumer->costumer_id = null;
        $costumer->name = null;
        $costumer->gender = null;
		$costumer->phone = null;
		$costumer->address = null;
		$data = array(
			'page' => 'add',
			'row' => $costumer
		);
		$this->template->load('template','costumer/costumer_form',$data);
	}

	public function edit($id) 
	{
		$query = $this->costumer_m->get($id);
		if($query->num_rows() > 0) {	
			$costumer = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $costumer
			);
			$this->template->load('template','costumer/costumer_form',$data);
		} else {
			echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='".site_url('costumer')."';</script>";
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->costumer_m->add($post);	
		} else if(isset($_POST['edit'])) 
			$this->costumer_m->edit($post);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
	  }
	  echo "<script>window.location='".site_url('costumer')."';</script>";
	
}
	public function del($id)
	{	
		$this->costumer_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus');</script>";
	  }
	  echo "<script>window.location='".site_url('costumer')."';</script>";
	}
}


?>
