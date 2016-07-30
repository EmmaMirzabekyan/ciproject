<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

    public function index() {
        $this->load->view('hello_view');
    }

    public function about($id) {
        $data['name'] = "Emma";
        $data['surename'] = "Miri";
        $data['age'] = 25;
        $this->load->view('about_view', $data);
        if ($id = 1) {
            echo "Great";
        }
    }

    public function user() {

        $config['base_url'] = base_url().'index.php/first/user/';
        $config['total_rows'] = $this->db->count_all('user');
        $config['per_page'] = '1';
        $config['full_tag_open'] = "<p style='text-align:center;letter-spacing:2px; color:green;'>";
        $config['full_tag_close'] = '</p>';
        
        $this->pagination->initialize($config); 

        $this->load->model('user_model');
        $data['user'] = $this->user_model->get_data($config['per_page'], $this->uri->segment(3));
        $this->load->view('user_view', $data);
    }

    public function add_user() {
        $data['name'] = "Hayk";
        $data['email'] = "haykGr@gmail.com";
        $this->load->model('user_model');
        $this->user_model->add_user($data);
    }

    public function update() {
        $data['name'] = 'Aslan';
        $data['email'] = 'xent@gmail.com';
        $this->load->model('user_model');
        $this->user_model->update($data);
    }

    public function delete($id) {
        $this->load->model('user_model');
        $this->user_model->delete($id);
    }

}
