<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class evenementModel extends dbh{

    /* public function listDemandes(){

        $sql = "select * from demande";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $resulta = $stmt->fetchAll();
        return $resulta;
        
    } */
    public function getEvent($id){

        $sql = "select * from evenement where id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
       return $results;
    }
    public function saveEvent($id){
        $nom = $_POST['nom'];
        $lieu = $_POST['lieu'];
        $id_club = $_POST['club'];
        $event_date = $_POST['event_date'];
        $description = $_POST['description'];

        $sql = "update evenement SET nom= '$nom',lieu='$lieu',event_date='$event_date',description='$description',id_club='$id_club' WHERE id=$id ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
       return $results;
    }
    public function saveNewEvent(){
        $nom = $_POST['nom'];
        $lieu = $_POST['lieu'];
        $id_club = $_POST['club'];
        $event_date = $_POST['event_date'];
        $description = $_POST['description'];
        $sql = "insert into evenement (nom,lieu,id_club,event_date,description) values (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$lieu,$id_club,$event_date,$description]);
        $results = $stmt->fetch();
       return $results;
    }
    public function delete($id){

        $sql = "delete from evenement where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
       
    }
    public function getAllEventRows(){

        $sql = "select * from evenement";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchall(); 
        
        return $result;
    }


} 



        
        