<?php

/* include_once PROJ_DIR . "/models/MembresModel.php"; */
include_once PROJ_DIR . "/models/ClubModel.php";

class DemandesContr {

    protected $ClubsModel; 
    /* protected $MembresModel; */
    public function __construct()
    {
        /* $this->MembresModel = new MembresModel(); */
        $this->ClubsModel = new ClubModel();
    }

    public function listClubs(){
        
        $clubs = $this->ClubsModel->listClubs();
        require_once PROJ_DIR . "/views/pages/home.php";
    }

} 