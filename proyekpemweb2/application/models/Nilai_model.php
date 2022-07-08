<?php
class Nilai_model extends CI_Model{

    private $table = "nilai_rating";

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

        $sql = "INSERT INTO nilai_rating (id,nama)
        VALUES (?,?)";
        $this->db->query($sql,$data);

    }
    public function update($data){

        $sql = "UPDATE nilai_rating SET id=?,nama=?
        WHERE id=?";

        $this->db->query($sql,$data);
    }

    public function delete($id){
    $sql = "DELETE from nilai_rating where id=?";
    $this->db->query($sql,array($id));
    }

}