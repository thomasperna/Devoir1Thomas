<?php

class Ctrl_Supermarche extends CI_Controller
{
    public function index()
    {
        $this->load->view("v_Supermarche");
    }
    public function getSecteur()
    {
        $this->load->model("Model_Secteur");
        $data["lesSecteurs"]=$this->Model_Secteur->getAllSecteurs();
        $this->load->view("v_Supermarche",$data);
    }
    public function getRayon()
    {
        $this->load->model("Model_Rayon");
        $data["lesRayons"]=$this->Model_Rayon->getAllRayons();
        $this->load->view("v_Sumermarche",$data);
    }
    public function getEmploye()
    {
        $this->load->model("Model_Employe");
        $data["lesEmployes"]=$this->Model_Employe->getAllEmployes();
        $this->load->view("v_Supermarche",$data);
    }
}

