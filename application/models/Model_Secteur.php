<?php

class Model_Secteur extends CI_Model{
   
    public function getAllSecteurs(){
        $sql=$this->db->query("select * from secteur");
        return $sql->result();
    }
    
}

