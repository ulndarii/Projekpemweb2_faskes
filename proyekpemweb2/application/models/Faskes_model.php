<?php
class Faskes_model extends CI_Model{

    private $table = "faskes";

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

        $sql = "INSERT INTO faskes (id,nama,alamat,latlong,jenis_id,deskripsi,skor_rating,foto1,foto2,foto3,kecamatan_id,website,jumlah_dokter,jumlah_pegawai)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);

    }
    public function update($data){

        $sql = "UPDATE faskes SET id=?,nama=?,alamat=?,latlong=?,jenis_id=?,deskripsi=?,skor_rating=?,foto1=?,foto2=?,foto3=?,kecamatan_id=?,website=?,jumlah_dokter=?,jumlah_pegawai=?
        WHERE id=?";

        $this->db->query($sql,$data);
    }

    public function delete($id){
    $sql = "DELETE from faskes where id=?";
    $this->db->query($sql,array($id));
    }

    public function update_foto($array){
        $sql = "UPDATE faskes SET foto=? WHERE id=?";
        $this->db->query($sql,$array);
    }

}
?>