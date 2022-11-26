<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class UserModel extends dbh{

  

    public function showevent(){
        $sql = "select * from evenement";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

       return $stmt;
        
    }
    public function showclub(){
        $sql = "select * from club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

       return $stmt;
        
    }

} 
