<?php

Class Fungsi {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('user_model');
        $usser_id = $this->ci->session->userdata('usserid');
        $user_data = $this->ci->user_model->get($usser_id)->row();
        return $user_data;
    }
}

?>