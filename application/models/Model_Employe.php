<?php

class Model_Employe extends CI_Model{
     public function getAllEmployes(){
        $sql=$this->db->query("select numE, prenomE, temps from employe, travailler where codeE.travailler=numE.employe");
        return $sql->result();
    }
}

