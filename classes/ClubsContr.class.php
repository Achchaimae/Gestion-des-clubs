<?php

include_once PROJ_DIR . "/models/ClubModel.php";

class ClubsContr {
   
    protected $model;
    public function __construct()
    {
        $this->model = new ClubModel();
    }

    public function newClubForm(){
        require_once PROJ_DIR . "/views/pages/create.php";
        
        /* if(isset($_post["nom"])) */
            /* $this->model->createClub($_POST["nom"],$_POST["description"],$_POST["datecreation"]); */
        return;
    }
    public function createNewClub($nom,$description,$datecreation,$logo){
     
         $this->model->createClub($nom,$description,$datecreation,$logo);
        /*  header('Location: ./index.php'); */
        return;
    }
   
    public function showClub($id){
        
    }
   
    public function editClub(){
        if(isset($_GET["id"]) && intval($_GET["id"]) > 0){
            $id = intval($_GET["id"]);
            //Get one club
            $club = $this->model->getClub($id);
            require_once PROJ_DIR . "/views/pages/edit.php";
            return ;
        } else {
            die("Id is required");
        }
        
    }
   
    
    

    public function index(){
        //var_dump(PROJ_DIR);
        //require_once PROJ_DIR . "/views/clubs/index.php";
    }
} 