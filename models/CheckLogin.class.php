<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class signupModel extends dbh{

    public function checkLogin($login,$password){

        $sql = "SELECT * FROM ADMIN WHERE login=? and password = '$password'";
        //connect do the connection with db
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$login]); 
        $results = $stmt->fetch();
        
        if($results){
                        //password & login exist
                        $test = array_values($results); 
                        // header('location: ../views/admin.php');
                        return $test[0]; //returns number of members in an array
                    }
                else {
                        return 0;
                    }
       
    }
    public function logout(){
        unset($_SESSION['login']);
        session_destroy();
        header('Location: ./index.php');
        
    }
}
?>