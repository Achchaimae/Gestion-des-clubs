<?php
include_once  'C:\xampp\htdocs\Gestion-des-clubs\classes\dbh.class.php';
class DemandeModel extends dbh{

    public function save($nom_complet,$class,$age,$email,$id_club){
        
        $sql = "INSERT INTO `demande`(`nom_complet`, `class`, `age`, `email`, `id_club`) VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1,$nom_complet);
        $stmt->bindParam(2,$class);
        $stmt->bindParam(3,$age);
        $stmt->bindParam(4,$email);
        $stmt->bindParam(5,$id_club);
        return $stmt->execute() ?? true;
        
    }

    public function isExist($id) {
        $sql = "SELECT 'id' FROM `club` WHERE id like $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
        return empty($results) ? false : true;
    }
}