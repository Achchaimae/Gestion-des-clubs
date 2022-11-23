<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class signupModel extends dbh{

    public function signup(){
        $login= $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM ADMIN WHERE login=? and password = '$password'";
        //connect do the connection with db
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$login]); 
        $results = $stmt->fetch();
        
        if($results){
            //password & login exist
            $test = array_values($results); 
            header('location: ../views/user interface/demande.php');
            return $test[0]; //returns number of members in an array
                }
                else 
                {
                    //password & login not  exist
                    // echo '<script type="text/javascript">window.alert("login or password wrong");</script>';
                    header('location: ../signup.php'); 
                    echo 'password && login wrong ';
                     return 0;
        }
       
    }
}
?>