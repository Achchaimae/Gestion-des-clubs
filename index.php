<?php
define("PROJ_DIR", dirname(__FILE__));

    session_start();
    /* unset($_SESSION['login']); */
   




include './models/ClubModel.php';
include './models/TodoModel.php';
include './models/CheckLogin.class.php';
/* include './classes/TodoContr.class.php'; */
include './classes/ClubsContr.class.php';

/* unset($_SESSION);
session_destroy(); */
/* var_dump($_SESSION); */

$ClubMdl = new ClubModel();
$clubCtl = new ClubsContr();
$todoModel = new todoModel();
/* $TodoCtl = new TodoContr(); */

$loginModel = new signupModel();


/* unset($_SESSION["admin"]); */
if(isset($_SESSION["login"])){
if($_SESSION["login"] === 'admin') {
/* if(false){
if(false) { */

    if(isset($_GET['c'])){
 
        if($_GET['c'] === "clubs"){
    
            if(isset($_GET['a'])){
                 
                if($_GET['a'] === "newClubForm"){
                    require_once PROJ_DIR . "/views/pages/create.php";
                }
                else if($_GET['a'] === "createNewClub"){
                     
                    $file=$_FILES['logo'];

                    $file_name = $file['name'];
                    
                    $tem_name = $file['tmp_name'];
                    
                    
                    $fileExt = explode('.', $file_name);
                    $fileExtlowCase = strtolower(end($fileExt));

                    $fileNameToSave = uniqid('',true).".".$fileExtlowCase;

                    $fileDestination = 'views/uploads/'.$fileNameToSave;

                    move_uploaded_file($tem_name,$fileDestination);
                    
                    $ClubMdl->createClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$fileDestination,0); 
                     header('Location: ./index.php');
                   
                }
                else if($_GET['a'] === "delete"){
                    $ClubMdl->deleteClub($_GET["id"]);
                    header('Location: ./index.php');
                    
                }
                else if($_GET['a'] === "clubForm"){
                        $id = intval($_GET["id"]);
                        //Get one club
                        $club = $ClubMdl->getClub($id);
                        if (isset($club['rep'])) {
                            $repName = $ClubMdl->getClubRepName($id);
                        }else {
                            $repName = 'no rep';
                        }
                        
                        require_once PROJ_DIR . "/views/pages/showclub.php";
                }

                else if($_GET['a'] === "edit"){
                        $id = intval($_GET["id"]);
                        //Get one club
                        $club = $ClubMdl->getClub($id);
                        $clubMembers = $ClubMdl->getClubMembersRows($id);
                        require_once PROJ_DIR . "/views/pages/editclub.php";
                }
                else if($_GET['a'] === "save"){
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
                   
                    if (isset($POST['newrep'])) {
                        $newrepID = $_POST['newrep'];
                    }else {
                        $newrepID = 0;
                    }
                    $id=$_GET["id"];
                    $ClubMdl->updateClub($nom,$description,$id,$newrepID,$fileDestination);
                    /* require_once PROJ_DIR . "/views/pages/xxx.php"; */
                    header("Location: index.php?c=clubs&a=clubForm&id=$id"); 
                }
                else if($_GET['a'] === "test"){
                    
                    require_once PROJ_DIR . "/views/pages/xxx.php";
                    
                    
                    
                }
            }
            
        }else if($_GET['c'] === "todo"){
            if(isset($_GET['a'])){
                if($_GET['a'] === 'add'){
                        $task=$_POST['task'];
                        $todoModel->addTodo($task);
                        header('Location: ./index.php');
                }
                else if ($_GET['a'] === 'delete') {
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $todoModel->DeleteTodo($id);
                        header('Location: ./index.php');
                    }
                }
            }
        }else if($_GET['c'] === "membres"){

            $allmembers = $ClubMdl->getAllMembersRows();

            require_once PROJ_DIR . "/views/pages/membres.php";
        }
    }  
    else{
        $listtodos = $todoModel->listTodo();
        $listclubs = $ClubMdl->listClubs();
        require_once PROJ_DIR . "/views/pages/admin.php";
    }
    
}}
// no login
else{
    if(isset($_GET['u'])){
        if($_GET['u'] === "log"){
            if($_GET['a'] === "login"){
                require_once PROJ_DIR . "/views/pages/loginform.php";
            }else if ($_GET['a'] === "session") {
                require_once PROJ_DIR . "/views/pages/login.php";
            }else if($_GET['a'] === "logout"){
                
                require_once PROJ_DIR . "/views/pages/logout.php";

            }
        }
    }else{
        require_once PROJ_DIR . "/views/pages/home.php";
    }
    
}

/* header('Location: ./index.php'); */
if(isset($_SESSION['login'])){
if(($_GET['c'] === "log") && ($_GET['a'] === "logout")){
    require_once PROJ_DIR . "/views/pages/logout.php";
}
}