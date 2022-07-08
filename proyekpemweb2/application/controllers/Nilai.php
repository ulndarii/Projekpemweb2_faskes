<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function index(){
        $this->load->model('nilai_model','nil');
        $list_nil = $this->nil->getAll();
        $data['list_nil'] = $list_nil;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['Title']='Form Kelola Nilai Rating';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai/create',$data);
        $this->load->view('layout/footer');

    }

    public function view(){

        $_id = $this->input->get('id');
        $this->load->model('nilai_model','nil');
        $data['nil']=$this->nil->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai/view',$data);
        $this->load->view('layout/footer');

    }

    public function save(){

        $this->load->model('nilai_model','nil');

        $_id = $this->nil->id =$this->input->post('id');
        $_nama = $this->nil->id =$this->input->post('nama');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_nil[]=$_id;
        $data_nil[]=$_nama;
        
        
        if(isset($_idedit)){
            //update data lama

            $data_nil[]=$_idedit;
            $this->nil->update($data_nil);
        }else{
            //save data baru
            $this->nil->save($data_nil);
        }
        //panggil fungsi save
        

        redirect(base_url().'index.php/nilai/view?id='.$_id,'refresh');
    }

    public function edit(){
        $_id= $this->input->get('id');
        $this->load->model('nilai_model','nil');
        $niledit = $this->nil->findById($_id);

        $data['Title']="Form Kelola Nilai Rating";
        $data['niledit']=$niledit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id= $this->input->get('id');
        $this->load->model('nilai_model','nil');
        $this->nil->delete($_id);
        redirect(base_url().'index.php/nil','refresh');
    }
}

?>
