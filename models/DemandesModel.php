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
    public function getDemande($id_demande){

        $sql = "select * from demande where id_demande = $id_demande";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
       return $results;
    }

    public function delete($id_demande){
        
        $sql = "delete from demande where id_demande=$id_demande";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
    }
    public function saveMember($nom_complet,$class,$age,$email,$membre_role,$id_club){
        
        $sql = "insert into membre (nom_complet,class,age,email,membre_role,id_club) values (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom_complet,$class,$age,$email,$membre_role,$id_club]);
        
    }

    

} 



        
        