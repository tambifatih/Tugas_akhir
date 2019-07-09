<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function index()
	{
		//pemanggilan login
		check_not_login();
		$data['total'] = count($this->db->get('supplier')->result());
		$data['total1'] = count($this->db->get('costumer')->result());
		$data['total2'] = count($this->db->get('p_category')->result());
		$data['total3'] = count($this->db->get('p_item')->result());
		$data['total4'] = count($this->db->get('p_unit')->result());
		$data['total5'] = count($this->db->get('stok_in')->result());
		$data['total6'] = count($this->db->get('stok_out')->result());
		$data['total7'] = count($this->db->get('penjualan')->result());
		$this->template->load('template','dasboard', $data);
	}
}
