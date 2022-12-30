<?php


include_once PROJ_DIR . "/models/ClubModel.php";
include_once PROJ_DIR . "/models/MembresModel.php";

class MembresContr {

    protected $Clubsmodel; 
    protected $model;
    public function __construct()
    {
        $this->model = new MembresModel();
        $this->Clubsmodel = new ClubModel();
    }

   /*  public function listDemandes(){
        
        $demandes = $this->model->listDemandes();
        require_once PROJ_DIR . "/views/pages/demandes.php";
    } */
    public function membreForm(){

        
        $membre=$this->model->getMembre($_GET['id']);
        $clubName = $this->Clubsmodel->getClubName($membre["id_club"]);
        require_once PROJ_DIR . "/views/pages/membre.php";
       
    }

    

} 