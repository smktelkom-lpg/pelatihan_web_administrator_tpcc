<?php
class Berita_model extends CI_Model{

    public $table = "berita";

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update($this->table,$data);
    }

    public function find_all(){
        return $this->db->get($this->table)->result_array();
    }

   public function find_by_id($id){
        return $this->db->get_where($this->table,['id' => $id])->row_array();
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }

    public function pagination($limit,$start){
        $this->db->limit($limit,$start);
        $result = $this->db->get($this->table)->result_array();
        if(count($result) > 0){
            return $result;
        }
        return false;
    }

    public function get_total(){
        return $this->db->count_all($this->table);
    }

    public function search($param){
        return $this->db->query("SELECT karyawan.*,divisi.nama as namadivisi 
        FROM karyawan 
        INNER JOIN divisi ON divisi.id = karyawan.iddivisi 
        WHERE CONCAT(karyawan.nama,karyawan.email) LIKE '%$param%'")
        ->result_array();
    }
}