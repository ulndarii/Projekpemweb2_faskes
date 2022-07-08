<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index(){
        $this->load->view('register');
    }

    public function save(){
        $this->load->model("user_model","users");
        $_username = $this->input->post('username');
        $_password1 = $this->input->post('password1');
        $_password2 = $this->input->post('password2');
        $_email = $this->input->post('email'); 


        $data_users[] = $_username;
        $data_users[] = $_password1;
        $data_users[] = $_email;

        $this->users->save($data_users);
        redirect(base_url().'index.php/login');

    }
}
?>