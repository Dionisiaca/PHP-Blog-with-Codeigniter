<?php
    class Users_model extends CI_Model
    {
        public function register($encrypted_pw){
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $encrypted_pw,
                'zipcode' => $this->input->post('zipcode')
            );
            return $this->db->insert('users', $data);
        }
    }
