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
        $id_demande = $_GET['id_demande'];
        $demande_info = $this->model->getDemande($id_demande);
        $this->model->saveMember(
            $demande_info['nom_complet'],
            $demande_info['class'],
            $demande_info['age'],
            $demande_info['email'],
            "membre",
            $demande_info['id_club']
        );

        $this->model->delete($id_demande);
        $this->Clubsmodel->updateMembersCount($demande_info['id_club']);
        header('Location: ./?c=demandes');
    }
    public function refuse(){
        $id_demande = $_GET['id_demande'];
        $this->model->delete($id_demande);
        header('Location: ./?c=demandes');
    }

    

} 