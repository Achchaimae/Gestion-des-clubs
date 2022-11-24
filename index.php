<?php


    session_start();

/* var_dump($_SESSION); */


define("PROJ_DIR", dirname(__FILE__));

include './models/ClubModel.php';
include './models/CheckLogin.class.php';
include './classes/TodoContr.class.php';
include './classes/ClubsContr.class.php';



$ClubMdl = new ClubModel();
$clubCtl = new ClubsContr();
$TodoCtl = new TodoContr();

$loginModel = new signupModel();


/* unset($_SESSION["admin"]); */
if(isset($_SESSION["login"])){
if($_SESSION["login"] === 'admin') {

    if(isset($_GET['c'])){
   
        if($_GET['c'] === "Clubs"){
    
            if(isset($_GET['a'])){
                if($_GET['a'] === "newClubForm"){
                    $clubCtl->newClubForm();  
                   
                    return;
                }
                else if($_GET['a'] === "createNewClub"){
                    $clubCtl->createNewClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$_POST["logo"]);
                    
                    return;
                }
                else if($_GET['a'] === "delete"){
                    $ClubMdl->deleteClub($_GET["id"]);
                    header('Location: ./index.php');
                    return;
                }
                else if($_GET['a'] === "edit"){
                    $clubCtl->editClub();
                    return;
                }
                else if($_GET['a'] === "save"){
                    $ClubMdl->saveClub();
                    return;
                }
            }
        }else if($_GET['c'] === "Todo"){
            if(isset($_GET['a'])){
                if($_GET['a'] === 'add'){
                    'add todo';
                }
                else if ($_GET['a'] === 'delete') {
                    if(isset($_GET['id'])){
                        'delete todo';
                    }
                }
            }

        }
    }  
            




        $todoModel = new todoModel();
        $listclubs = $todoModel->listTodo();
        $listtodos = $ClubMdl->listClubs();
        require_once PROJ_DIR . "/views/pages/admin.php";
}}
else{
    echo 'tt';
}

            
