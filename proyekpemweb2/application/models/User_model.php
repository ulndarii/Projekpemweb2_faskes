<?php
class User_model extends CI_Model{

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
    public function login($uname,$pass){
        $sql = "SELECT * FROM users WHERE username=?
               and password=MD5(?)";
        $data = [$uname,$pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
    public function save ($data){
        //INSERT INTO `users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b','admin@gmail.com','2022-06-12 07:32:05','2022-06-12 07:32:05',1,'administrator');
        // $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role) VALUES (default,?,MD5(?),?,now(),now(),0,'public')";
        $sql = "INSERT INTO users (username, password, email, created_at, last_login, status, role) VALUES (?,MD5(?),?,now(),now(),0,'public')";
        $this->db->query($sql, $data);
    }
    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
?>