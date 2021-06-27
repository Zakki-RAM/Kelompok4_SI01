<?php

class Pasien_model extends CI_Model{

    public $id;
    public $nama;
    public $email;
    public $spesialisasi;
    public $pasien_id;


    public function getAll(){
        //select * from pasien
        $query = $this->db->get('dokter');
        return $query;

    }

    public function findById($id){
        //select * from pasien where id = $id
        
        return $this->db->get_where('dokter', ["id" => $id])->row();
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function save($data)
	{
        return $this->db->insert('dokter',$data);
        
	}


    
    public function update($data,$id)
    {
        return $this->db->update('dokter', $data, array('id' => $id));
    }

}




?>