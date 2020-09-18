<?php

    class Post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_posts($slug = FALSE){
            if($slug === FALSE){
                $this->db->order_by('id', 'DESC');
                $query = $this->db->get('posts');
                return $query->result_array();
            } else {
                $query = $this->db->get_where('posts', array('slug' => $slug));
                return $query->row_array();
            }
        }

        public function new_post(){
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body' => $this->input->post('content')
            );

            return $this->db->insert('posts', $data);
        }

        public function delete_post($id){
            $this->db->where('id', $id);
            $this->db->delete('posts');
            return true;
        }

        public function edit_post(){
            $slug = url_title($this->input->post('title'));
            $id = $this->input->post('id');

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body' => $this->input->post('content')
            );

            return $this->db->update('posts', $data);
            $this->db->where('id', $id);
        }
    }