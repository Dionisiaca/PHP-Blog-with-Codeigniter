<?php

class Users extends CI_Controller{
    public function register(){
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]',array('is_unique' => 'Oops. This username is already taken. Try something different.'));
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]',array('is_unique' => 'This email is already in use. Try to login into your account.'));
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register');
            $this->load->view('templates/footer');
        }else{
            $encripted_pw = md5($this->input->post('pasword'));
            $this->users_model->register($encripted_pw);

            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

            redirect('posts');

        }
    }
}