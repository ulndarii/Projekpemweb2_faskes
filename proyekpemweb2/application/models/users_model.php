<?php
    class Users_model extends CI_Model {
   
    private $table = 'users';

    public function getAll(){
        //select * from mahasiswa;
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        //select * from mahasiswa where nim=$id;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save ($data){
        //INSERT INTO `users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b','admin@gmail.com','2022-06-12 00:07:42','2022-06-12 00:07:42',1,'administrator');
        // $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role) VALUES (default,?,MD5(?),?,now(),now(),0,'public')";
        $sql = "INSERT INTO users (username, password, email, created_at, last_login, status, role) VALUES (?,MD5(?),?,now(),now(),0,'public')";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update `users` VALUES
        $sql = "UPDATE users SET username=?, password=MD5(?), email=?, status=?, role=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from kegiatan where id = '1';
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, array($id));
    }

    public function login($uname,$pass){
        $sql = "SELECT * FROM users WHERE username=? and password=MD5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function lastId(){
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
?>