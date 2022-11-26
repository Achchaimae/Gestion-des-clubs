<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class DemandeModel extends dbh{

    public function demande($nom_complet,$class,$age,$email){
        $sql = "insert into demande (nom_complet,class,age,email) values(?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        print $stmt->execute([$nom_complet,$class,$age,$email]);
        return $stmt;
    }

    
    }
