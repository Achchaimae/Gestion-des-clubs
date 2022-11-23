<?php

define("PROJ_DIR", dirname(__FILE__));
//define("PROJ_PATH", path(__FILE__));
include './classes/TodoContr.class.php';
include './classes/ClubsContr.class.php';
include './classes/ViewsClass.php';
include './models/signupModel.php';


$clubCtl = new ClubsContr();
$TodoCtl = new TodoContr();
$Viewcls = new ViewsClass();
$signupmld = new signupModel();

if(isset($_GET['c'])){
   
    if($_GET['c'] === "Clubs"){

        
        if(isset($_GET['a'])){
            if($_GET['a'] === "newClubForm"){
                $clubCtl->newClubForm();  
            
                return;
            }
            if($_GET['a'] === "createNewClub"){
                $clubCtl->createNewClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$_POST["logo"]);
                
                return;
            }
           /*  if($_GET['a'] === "list"){
                 $clubCtl->listClubs();
                
                return;
            } */
            if($_GET['a'] === "edit"){
                $clubCtl->editClub();
                return;
            }
        }  
        
        $clubCtl->index();
        return;
    }
    else if( $_GET['c'] === "Todo"){

        if($_GET['a'] === "add"){
        
      $TodoCtl->addNewTodo($_POST["task"]);
    }

   
      /*   if($_GET['a'] === "list"){
        
      $TodoCtl->showTodo();
      
    } */
    if($_GET['a'] === "delete"){
        
        $TodoCtl->deleteTodo();
         
      }
     
} 
 else if( $_GET['c'] === "login"){
    $signupmld->signup($_POST['login'],$_POST['password']) ;
    } 
} //global variable is not set
 else {
        require_once PROJ_DIR . "/views/home.php"; 
    }

/* $result = $Todo->fetchall();
      var_dump($result); */
