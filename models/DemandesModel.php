<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class DemandesModel extends dbh{

    public function listDemandes(){
        
        $sql = "select * from demande";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        /* $result = $stmt->fetchall();
        var_dump($result); */
        
       return $stmt;
        
    }
    public function delete(){
        $id = $_GET['id'];
        $sql = "delete from Todo where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        header('Location: ./index.php');
    }

} 
