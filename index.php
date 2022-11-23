<?php

if (!isset($_session)) {
    session_start();
}



define("PROJ_DIR", dirname(__FILE__));

include './models/CheckLogin.class.php';
include './classes/TodoContr.class.php';
include './classes/ClubsContr.class.php';
include './views/classes/ViewsClass.php';

$clubCtl = new ClubsContr();
$TodoCtl = new TodoContr();
$Viewcls = new ViewsClass();
$loginModel = new signupModel();




            


if(!isset($_SESSION["admin"]))  {
    if (!isset($_GET['c'])) {
        require_once PROJ_DIR . "/includes/users_header.php";
        require_once PROJ_DIR . "/views/pages/home.php";
    }else   {
                if($_GET['c'] === 'log'){

                    if( $_GET['a'] === 'login'){
            
                        require_once PROJ_DIR . "/includes/users_header.php";
                        require_once PROJ_DIR . "/views/pages/signup.php";
            
                    }else if( $_GET['a'] === 'logout'){
                        echo 'logout';
                        
                        /* require_once PROJ_DIR . "/views/pages/logout.php"; */
                        header("Location: index.php");
                    if(isset($_SESSION["admin"])){
                        unset($_SESSION["admin"]);
                        session_destroy();
                        require_once PROJ_DIR . "index.php";
                    }
                    }else if( $_GET['a'] === 'checkpassword'){
                        $login= $_POST['login'];
                        $password = $_POST['password'];
                        if($loginModel->checkLogin($login,$password)){
                            if(!isset($_SESSION)){
                                session_start();
                            $_SESSION["admin"] = $login;
                            };
                            $Viewcls->updateAdmin();
                        } else{
                            require_once PROJ_DIR . "/includes/users_header.php";
                            require_once PROJ_DIR . "/views/pages/signup.php";
                        }
            
                    }
                }
           
            }
                                }


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
} //global variable is not set
else {
        //header('Location: ./admin.php'); 
        $clubCtl->getmembers(13);
        /* $Viewcls->updateAdmin(); */

/*         require_once PROJ_DIR . "/views/admin.php"; 
 */}

