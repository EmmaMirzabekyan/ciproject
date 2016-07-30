<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model('user_model');
        }




    
        public function all(){
            $users = $this->user_model->get();
            $data = array(
                'hayk' => $users
            );
            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('all_users', $data);
            $this->load->view('footer');
        }
        
        public function create(){
            if(isset($_POST['submit'])) {
                 
                $name = $this->input->post('userName');
                $email = $this->input->post('userEmail');
                $data = array(
                    'name'=>$name,
                    'email'=>$email
                );
                
                $result = $this->user_model->create($data);
                if($result){
                    redirect('user/all');
                }else{
                    $this->load->view('header');
                    $this->load->view('nav');
                    $this->load->view('all_users', $data);
                    $this->load->view('footer');
                }
                
                
            }else{
                $this->load->view('header');
                $this->load->view('nav');
                $this->load->view('create_user');
                $this->load->view('footer');
            }
            
        }
        
        public function delete($id){
            $this->user_model->delete($id);
            redirect('user/all');
        }

}
