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
    }

    public function ClubForm(){
        $id = intval($_GET["id"]);
        $membresCount = $this->model->getClubMembersCount($id);
        
        //Get one club
        $club = $this->model->getClub($id);
        if (isset($club['rep'])) {
            $repName = $this->model->getClubRepName($id);
        }else {
            $repName = 'no rep';
        }
        
        require_once PROJ_DIR . "/views/pages/showclub.php";
        return;
    }
    public function createNewClub(){
        $file=$_FILES['logo'];

        $file_name = $file['name'];
        
        $tem_name = $file['tmp_name'];
        
        
        $fileExt = explode('.', $file_name);
        $fileExtlowCase = strtolower(end($fileExt));

        $fileNameToSave = uniqid('',true).".".$fileExtlowCase;

        $fileDestination = 'views/uploads/'.$fileNameToSave;

        move_uploaded_file($tem_name,$fileDestination);

        $this->model->createClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$fileDestination,0);
        header('Location: ./index.php');
        return;
    }
   
    public function edit(){
        $id = intval($_GET["id"]);
        //Get one club
        $club = $this->model->getClub($id);
        $clubMembers = $this->model->getClubMembersRows($id);
        require_once PROJ_DIR . "/views/pages/editclub.php";
    }

    public function save(){
        $file=$_FILES['logo'];
        if ($file['error']>0) {
            $fileDestination=$_POST['logoD'];
        }else{
        $file_name = $file['name'];
        $tem_name = $file['tmp_name'];
        $fileExt = explode('.', $file_name);
        $fileExtlowCase = strtolower(end($fileExt));
        $fileNameToSave = uniqid('',true).".".$fileExtlowCase;
        $fileDestination = 'views/uploads/'.$fileNameToSave;
        move_uploaded_file($tem_name,$fileDestination);
        }
        
        /* $logo = $_POST["logo"];  */
        $nom= $_POST["nom"]; 
        $description= $_POST["description"]; 
        
        if (isset($_POST['newrep'])) {
            $newrepID = $_POST['newrep'];
        }else {
            $newrepID = 0;
        }
        $id=$_GET["id"];
        $this->model->updateClub($nom,$description,$id,$newrepID,$fileDestination);
        /* var_dump($_POST); */
        header("Location: index.php?c=clubs&a=clubForm&id=$id"); 
    }
    public function delete(){
        $id=$_GET['id'];
        $this->model->delete($id);
    }
    public function test(){
        $test= $this->model->getClubMembersCount(1);
        var_dump($test);
    }
} 