<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

    public function index(){
        $this->load->model('jenis_model','jf');
        $list_jf = $this->jf->getAll();
        $data['list_jf'] = $list_jf;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['Title']='Form Kelola Fasilitas Kesehatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis/create',$data);
        $this->load->view('layout/footer');

    }

    public function view(){

        $_id = $this->input->get('id');
        $this->load->model('jenis_model','jf');
        $data['jf']=$this->jf->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis/view',$data);
        $this->load->view('layout/footer');

    }

    public function save(){

        $this->load->model('jenis_model','jf');

        $_id = $this->jf->id =$this->input->post('id');
        $_nama = $this->jf->nama =$this->input->post('nama');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_jf[]=$_id;
        $data_jf[]=$_nama;
        
        if(isset($_idedit)){
            //update data lama

            $data_jf[]=$_idedit;
            $this->jf->update($data_jf);
        }else{
            //save data baru
            $this->jf->save($data_jf);
        }
        //panggil fungsi save
        

        redirect(base_url().'index.php/jenis/view?id='.$_id,'refresh');
    }

    public function edit(){
        $_id= $this->input->get('id');
        $this->load->model('jenis_model','jf');
        $jfedit = $this->jf->findById($_id);

        $data['Title']="Form Kelola Fasilitas Kesehatan";
        $data['jfedit']=$jfedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id= $this->input->get('id');
        $this->load->model('jenis_model','jf');
        $this->jf->delete($_id);
        redirect(base_url().'index.php/jf','refresh');
    }
}

?>
