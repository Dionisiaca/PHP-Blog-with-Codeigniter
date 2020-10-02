<?php

class Posts extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Latest Posts';
        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        $post_id = $data['post']['id'];
        $data['comments'] = $this->comments_model->get_comments($post_id);

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

    public function new()
    {
        $data['title'] = 'New post';
        $data['categories'] = $this->post_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/new', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path'] = './assets/images/posts';
            $config['allowed_types'] = 'gif|jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.png';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }

            $this->post_model->new_post($post_image);

            $this->session->set_flashdata('post_created', 'You have created a new post.');

            redirect('posts');
        }
    }

    public function delete($id){
        $this->post_model->delete_post($id);

        $this->session->set_flashdata('post_deleted', 'Post has been deleted.');

        redirect('posts');
    }

    public function edit($slug){

        $data['post'] = $this->post_model->get_posts($slug);
        $data['categories'] = $this->post_model->get_categories();


        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] =    'Edit Post';

        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $this->post_model->edit_post();

        $this->session->set_flashdata('post_updated', 'Post has been updated.');

        redirect('posts');
    }


}
