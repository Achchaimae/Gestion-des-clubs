<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class CalendarModel extends dbh{

    public function listEvenement(){
        $sql = "select * from evenement";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        /* $result = $stmt->fetchall();
        var_dump($result); */
       return $stmt;
            /* 0=>["id"=>1, "name"=>"club1"],
            1=>["id"=>2, "name"=>"club2"], */
        
    }

} 
