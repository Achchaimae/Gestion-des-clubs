<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class TodoModel extends dbh{

    public function ajoutdemande($nom_complet,$class,$age,$email,$id_club){
        $sql = "insert into demande (nom_complet,class,age,email,id_club) values(?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        
        $stmt->execute([$nom_complet,$class,$age,$email,$id_club]);
     
    }
}