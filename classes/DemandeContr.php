<?php

include_once PROJ_DIR . "/models/DemandeModel.php";

class demandeContr {
   
    protected $demande;
    public function __construct()
    {
        $this->demande = new DemandeModel();
    }

   
    public function demande($nom_complet,$class,$age,$email){
     
         $this->model->demande($nom_complet,$class,$age,$email);
         header('Location: ./index.php');
        return;
    }
}