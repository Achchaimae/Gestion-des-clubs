<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class MembresModel extends dbh{

    /* public function listDemandes(){

        $sql = "select * from demande";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $resulta = $stmt->fetchAll();
        return $resulta;
        
    } */
    public function getMembre($id_membre){

        $sql = "select * from membre where id_membre = $id_membre";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
       return $results;
    }

    

} 



        
        