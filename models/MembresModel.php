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
    public function saveMembre($id_membre){
        $nom_complet = $_POST['nom_complet'];
        $class = $_POST['class'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $id_club = $_POST['club'];
        $sql = "update membre SET nom_complet= '$nom_complet',class='$class',age='$age',email='$email',id_club='$id_club' WHERE id_membre=$id_membre ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
       return $results;
    }
    public function saveNewMembre(){
        $nom_complet = $_POST['nom_complet'];
        $class = $_POST['class'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $id_club = $_POST['club'];
        $membre_role = 'membre';
        $sql = "insert into membre (nom_complet,class,age,email,membre_role,id_club) values (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom_complet,$class,$age,$email,$membre_role,$id_club]);
        $results = $stmt->fetch();
       return $results;
    }
    public function delete($id_membre){

        $sql = "delete from membre where id_membre=$id_membre";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
       
}

    

} 



        
        