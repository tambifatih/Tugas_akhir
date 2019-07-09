<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	//multi user dan multi level//
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_model');
			$query = $this->user_model->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'usserid' => $row->usser_id,
					'level'=>$row->level

				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dasboard')."';
				</script>";
			} else{
				echo "<script>
					alert('Maaf login gagal, username atau password salah');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		 } 	
	}

	public function logout()
	{
		$params = array('usserid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
