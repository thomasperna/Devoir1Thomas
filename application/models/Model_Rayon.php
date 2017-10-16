<?php
class Model_Rayon extends CI_Model{
   public function getAllRayons(){
        $sql=$this->db->query("select * from rayon");
        return $sql->result();
    } 
}



