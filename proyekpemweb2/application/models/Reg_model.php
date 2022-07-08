<?php
class Reg_model extends CI_Model {

    private $table = "users";

    public function getAll(){
       
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("id",$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function registrasi($uname,$pass){
        $sql =  "SELECT * FROM user WHERE username=?
         and password =(?)";
         
        $data = [$uname,$pass];
        $query = $this->db->query($sql,$data);
        return $query->row();
    }
}
