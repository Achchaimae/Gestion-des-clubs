    <?php
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
        unset($_SESSION["admin"]);
        
/*         require_once PROJ_DIR . "/views/admin.php"; 
 */}

/* $result = $Todo->fetchall();
      var_dump($result); */
