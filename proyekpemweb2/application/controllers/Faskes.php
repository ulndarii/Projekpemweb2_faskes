<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes extends CI_Controller {

    public function index(){
        $this->load->model('faskes_model','fas');
        $list_fas = $this->fas->getAll();
        $data['list_fas'] = $list_fas;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['Title']='Form Kelola Fasilitas Kesehatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/create',$data);
        $this->load->view('layout/footer');

    }

    public function view(){

        $_id = $this->input->get('id');
        $this->load->model('faskes_model','fas');
        $data['fas']=$this->fas->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/view',$data);
        $this->load->view('layout/footer');

    }

    public function save(){

        $this->load->model('faskes_model','fas');

        $_id = $this->fas->id =$this->input->post('id');
        $_nama = $this->fas->id =$this->input->post('nama');
        $_alamat = $this->fas->id =$this->input->post('alamat');
        $_latlong = $this->fas->id =$this->input->post('latlong');
        $_jenis_id = $this->fas->id =$this->input->post('jenis_id');
        $_deskripsi = $this->fas->id =$this->input->post('deskripsi');
        $_skor_rating = $this->fas->id =$this->input->post('skor_rating');
        $_foto1 = $this->fas->id =$this->input->post('foto1');
        $_foto2 = $this->fas->id =$this->input->post('foto2');
        $_foto3 = $this->fas->id =$this->input->post('foto3');
        $_kecamatan_id = $this->fas->kecamatan_id =$this->input->post('kecamatan_id');
        $_website = $this->fas->id =$this->input->post('website');
        $_jumlah_dokter = $this->fas->id =$this->input->post('jumlah_dokter');
        $_jumlah_pegawai = $this->fas->id =$this->input->post('jumlah_pegawai');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_fas[]=$_id;
        $data_fas[]=$_nama;
        $data_fas[]=$_alamat;
        $data_fas[]=$_latlong;
        $data_fas[]=$_jenis_id;
        $data_fas[]=$_deskripsi;
        $data_fas[]=$_skor_rating;
        $data_fas[]=$_foto1;
        $data_fas[]=$_foto2;
        $data_fas[]=$_foto3;
        $data_fas[]=$_kecamatan_id;
        $data_fas[]=$_website;
        $data_fas[]=$_jumlah_dokter;
        $data_fas[]=$_jumlah_pegawai;
        
        
        if(isset($_idedit)){
            //update data lama

            $data_fas[]=$_idedit;
            $this->fas->update($data_fas);
        }else{
            //save data baru
            $this->fas->save($data_fas);
        }
        //panggil fungsi save
        

        redirect(base_url().'index.php/faskes/view?id='.$_id,'refresh');
    }

    public function edit(){
        $_id= $this->input->get('id');
        $this->load->model('faskes_model','fas');
        $fasedit = $this->fas->findById($_id);

        $data['Title']="Form Kelola Fasilitas Kesehatan";
        $data['fasedit']=$fasedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id= $this->input->get('id');
        $this->load->model('faskes_model','fas');
        $this->fas->delete($_id);
        redirect(base_url().'index.php/fas','refresh');
    }
    
    public function upload(){

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 800;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $_id = $this->input->post('id');

        $array = explode('.',$_FILES['fotofaskes']['name']);
        $extension = end($array);

        //die(print_r($_FILES));
        $new_name = $_id.'.'.$extension;
        //die($new_name);

        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotofaskes'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }
            else
            {   
                //panggil model
                $this->load->model('faskes_model','fas');
                $array_data[]= $new_name ; // ?1
                $array_data[]= $_id ; //?2

                //update foto faskes
                $this->fas->update_foto($array_data);
                
                $data = array('upload_data' => $this->upload->data());
                //$this->load->view('upload_success', $data);
            }
            redirect(base_url().'index.php/faskes/view?id='.$_id,'refresh');
        }
    
}

?>
