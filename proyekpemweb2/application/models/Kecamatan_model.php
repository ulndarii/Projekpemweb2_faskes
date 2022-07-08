<?php
class Kecamatan_model extends CI_Model{

    private $table = "kecamatan";

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

        $sql = "INSERT INTO kecamatan (id,nama)
        VALUES (?,?)";
        $this->db->query($sql,$data);

    }
    public function update($data){

        $sql = "UPDATE kecamatan SET id=?,nama=?
        WHERE id=?";

        $this->db->query($sql,$data);
    }

    public function delete($id){
    $sql = "DELETE from kecamatan where id=?";
    $this->db->query($sql,array($id));
    }

}