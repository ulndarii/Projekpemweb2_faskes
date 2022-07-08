<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function index(){
        $this->load->model('komentar_model','kom');
        $list_kom = $this->kom->getAll();
        $data['list_kom'] = $list_kom;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['Title']='Form Kelola Komentar';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/create',$data);
        $this->load->view('layout/footer');

    }

    public function view(){

        $_id = $this->input->get('id');
        $this->load->model('komentar_model','kom');
        $data['kom']=$this->kom->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/view',$data);
        $this->load->view('layout/footer');

    }

    public function save(){

        $this->load->model('komentar_model','kom');

        $_id = $this->kom->id =$this->input->post('id');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_kom[]=$_id;
        
        
        if(isset($_idedit)){
            //update data lama

            $data_kom[]=$_idedit;
            $this->kom->update($data_kom);
        }else{
            //save data baru
            $this->kom->save($data_kom);
        }
        //panggil fungsi save
        

        redirect(base_url().'index.php/komentar/view?id='.$_id,'refresh');

        $this->load->model("komentar_model","komen");
        $this->komen->rating = $this->input->post('beri_rating');
        $this->komen->kmn = $this->input->post('kmn');

        $data['komen']=$this->komen;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('komen/view',$data);
        $this->load->view('layout/footer');
    }

    public function edit(){
        $_id= $this->input->get('id');
        $this->load->model('komentar_model','kom');
        $komedit = $this->kom->findById($_id);

        $data['Title']="Form Kelola Komentar";
        $data['komedit']=$komedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id= $this->input->get('id');
        $this->load->model('komentar_model','kom');
        $this->kom->delete($_id);
        redirect(base_url().'index.php/kom','refresh');
    }

    public function simpan(){
        $this->load->model("komentar_model","komen");
        $this->komen->rating = $this->input->post('beri_rating');
        $this->komen->kmn = $this->input->post('kmn');

        $data['komen']=$this->komen;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('komen/view',$data);
        $this->load->view('layout/footer');
    }
}

?>
