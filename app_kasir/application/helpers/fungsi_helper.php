<?php

    //login terlebih dahulu sebelum masuk dasboard//
    function check_already_login(){
        $ci =& get_instance();
        $user_session = $ci->session->userdata('usserid');
        if($user_session){
            redirect('dasboard');   
        }
    }

    function check_not_login(){
        $ci =& get_instance();
        $user_session = $ci->session->userdata('usserid');
        if(!$user_session){
            redirect('auth/login');   
        }
    }

    function check_admin() {
        $ci =& get_instance();
        $ci->load->library('fungsi');
        if($ci->fungsi->user_login()->level != 1){
            redirect('dasboard');
        } 
    }

?>