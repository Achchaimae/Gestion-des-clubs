<?php

include_once PROJ_DIR . "/models/ClubModel.php";

class DemandeContr{
    protected $model;
    public function __construct()
    {
        $this->model = new DemandeModel();
    }

    public function Demande($nom_complet,$class,$age,$email,$id_club){
     
         $this->model->demande($nom_complet,$class,$age,$email,$id_club);
         header('Location: ./index.php');
        return;
    }
}