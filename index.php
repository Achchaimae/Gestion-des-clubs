<?php


    session_start();

/* var_dump($_SESSION); */


define("PROJ_DIR", dirname(__FILE__));

include './models/ClubModel.php';
include './models/TodoModel.php';
include './models/CheckLogin.class.php';
/* include './classes/TodoContr.class.php'; */
include './classes/ClubsContr.class.php';



$ClubMdl = new ClubModel();
$clubCtl = new ClubsContr();
$todoModel = new todoModel();
/* $TodoCtl = new TodoContr(); */

$loginModel = new signupModel();


/* unset($_SESSION["admin"]); */
if(isset($_SESSION["login"])){
if($_SESSION["login"] === 'admin') {

    if(isset($_GET['c'])){
 
        if($_GET['c'] === "clubs"){
    
            if(isset($_GET['a'])){
                 
                if($_GET['a'] === "newClubForm"){
                    require_once PROJ_DIR . "/views/pages/create.php";
                    
                }
                else if($_GET['a'] === "createNewClub"){
                    $ClubMdl->createClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$_POST["logo"]);
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
                        $repName = $ClubMdl->getClubRepName($id);
                        
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
                    
                    $nom= $_POST["nom"]; 
                    $description= $_POST["description"]; 
                    $newrepID= $_POST['newrep'];
                    $id=$_GET["id"];
                    $ClubMdl->updateClub($nom,$description,$id,$newrepID);
                    header("Location: index.php?c=clubs&a=clubForm&id=$id"); 
                }
                else if($_GET['a'] === "test"){
                    
                    require_once PROJ_DIR . "/views/pages/xxx.php";
                    
                    $repName = $ClubMdl->getClubMembersCount(1);

                    echo $repName;
                    
                    
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
    require_once PROJ_DIR . "/views/pages/home.php";
}

/* header('Location: ./index.php'); */
