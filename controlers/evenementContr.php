<?php


include_once PROJ_DIR . "/models/evenementModel.php";
include_once PROJ_DIR . "/models/MembresModel.php";

class evenementContr {

    protected $Clubsmodel; 
    protected $model;
    public function __construct()
    {
        $this->model = new evenementModel();
        $this->Clubsmodel = new ClubModel();
    }

   /*  public function listDemandes(){
        
        $demandes = $this->model->listDemandes();
        require_once PROJ_DIR . "/views/pages/demandes.php";
    } */
    public function EventForm(){
        $id = $_GET['id'];
        $listClubs = $this->Clubsmodel->listClubs();
        $event=$this->model->getEvent($_GET['id']);
        $clubName = $this->Clubsmodel->getClubName($event["id_club"]);
        require_once PROJ_DIR . "/views/pages/event.php";
       
    }
    public function newEventForm(){
        
        $listClubs = $this->Clubsmodel->listClubs();
        /* $membre=$this->model->getMembre($_GET['id']);
        $clubName = $this->Clubsmodel->getClubName($membre["id_club"]); */
        require_once PROJ_DIR . "/views/pages/newEventForm.php";
       
    }
    public function saveNewEvent(){
        
        $this->model->saveNewEvent();
        header('Location: index.php?c=evenement'); 
    }
    public function updateEvent(){
        
        $id_membre = $_GET['id'];
        
        $this->model->saveEvent($id_membre);
        header('Location: index.php?c=evenement'); 
        
    }
    public function deleteEvent(){
        
        $id = $_GET['id'];
        
        $this->model->delete($id);
        header('Location: index.php?c=evenement'); 
        
    }
    public function getAllEventRows(){
        
        // this function returns associatuve array of club member_ids
        return $this->model->getAllEventRows();
        
        /* $clubMembers = $stmt->fetchall();   */

        
    }
    

} 