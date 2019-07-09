<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('usser');
        $this->db->where('username',$post['username']);
        $this->db->where('password',sha1($post['password']));
        $query = $this->db->get();
        return $query;

    }

    public function get($id = null) 
    {
        $this->db->from('usser');
        if($id != null) {
            $this->db->where('usser_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = $post['level'];
        $this->db->insert('usser', $params);  

    }
    public function edit($post) 
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = $post['level'];
        $this->db->where('usser_id', $post['usser_id']);
        $this->db->update('usser', $params);  

    }
    
    public function del($id)
    {
        $this->db->where('usser_id', $id);
        $this->db->delete('usser');
    }
}