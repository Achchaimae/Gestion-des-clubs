<?php

include_once PROJ_DIR . "/models/DemandesModel.php";
include_once PROJ_DIR . "/models/ClubModel.php";

class DemandesContr {

    protected $Clubsmodel; 
    protected $model;
    public function __construct()
    {
        $this->model = new DemandesModel();
        $this->Clubsmodel = new ClubModel();
    }

    public function listDemandes(){
        
        $demandes = $this->model->listDemandes();
        require_once PROJ_DIR . "/views/pages/demandes.php";
    }
    public function accept(){
        $id = $_GET['id'];

    }
    public function refuse(){
        $id = $_GET['id'];
        
    }

    

} 