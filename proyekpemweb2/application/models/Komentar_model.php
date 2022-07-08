<?php
class Komentar_model extends CI_Model{

    private $table = "komentar";
    public $rating;
    public $kmn;

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("id",$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data){

        $sql = "INSERT INTO komentar (id,tanggal,isi,users_id,faskes_id,nilai_rating_id)
        VALUES (,?,?,?,?,?)";
        $this->db->query($sql,$data);

    }
    public function update($data){

        $sql = "UPDATE komentar SET id=?,tanggal=?,isi=?,user_id=?,faskes_id=?,nilai_rating_id=?
        WHERE id=?";

        $this->db->query($sql,$data);
    }

    public function delete($id){
    $sql = "DELETE from komentar where id=?";
    $this->db->query($sql,array($id));
    }

}