<?php
session_start();
/* $_SESSION["admin"] = 'admin'; */

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
                            $_SESSION["admin"] = 'admin';
                            }
                            require_once PROJ_DIR . "/includes/users_header.php";
                            require_once PROJ_DIR . "/views/pages/admin.php";
                        } else{
                            require_once PROJ_DIR . "/includes/users_header.php";
                            require_once PROJ_DIR . "/views/pages/signup.php";
                        }
            
                    }
                }
                if($_GET['a'] === 'logout'){
                    
                }
                if($_GET['c'] === 'club'){
                    echo 'club';
                }
                if($_GET['c'] === 'member'){
                    echo 'member';
                }
            }
    

                                }else {
                                    $Viewcls->updateAdmin(); 
                                }


                                
                /*  */
/*
if(isset($_GET['c'])){
    

    
} else{

    
} */