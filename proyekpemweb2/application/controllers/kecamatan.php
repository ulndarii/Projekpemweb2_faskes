<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

    public function index(){
        $this->load->model('kecamatan_model','kec');
        $list_kec = $this->kec->getAll();
        $data['list_kec'] = $list_kec;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['Title']='Form Kelola Kecamatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/create',$data);
        $this->load->view('layout/footer');

    }

    public function view(){

        $_id = $this->input->get('id');
        $this->load->model('kecamatan_model','kec');
        $data['kec']=$this->kec->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/view',$data);
        $this->load->view('layout/footer');

    }

    public function save(){

        $this->load->model('kecamatan_model','kec');

        $_id = $this->kec->id =$this->input->post('id');
        $_nama = $this->kec->nama =$this->input->post('nama');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_kec[]=$_id;
        $data_kec[]=$_nama;
        
        if(isset($_idedit)){
            //update data lama

            $data_kec[]=$_idedit;
            $this->kec->update($data_kec);
        }else{
            //save data baru
            $this->kec->save($data_kec);
        }
        //panggil fungsi save
        

        redirect(base_url().'index.php/kecamatan/view?id='.$_id,'refresh');
    }
    public function delete(){
        $_id= $this->input->get('id');
        $this->load->model('kecamatan_model','kec');
        $this->kec->delete($_id);
        redirect(base_url().'index.php/kec','refresh');
    }

    
}

?>
