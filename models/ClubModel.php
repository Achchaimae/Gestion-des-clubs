<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class ClubModel extends dbh{

    public function createClub($nom,$description,$datecreation,$logo,$membres){
        $sql = "insert into club (nom,description,date_creation,logo,membres) values(?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$description,$datecreation,$logo,$membres]);
    }

    public function listClubs(){
        $sql = "select * from club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
       return $stmt;
            /* 0=>["id"=>1, "name"=>"club1"],
            1=>["id"=>2, "name"=>"club2"], */
    }

    public function getClub($id){
        $sql = "select * from club where id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetch();
        return $results;
      /*  return $stmt; */
    }

    public function getClubMembersID($id_club){
        
        // this function returns associatuve array of club member_ids
        $sql = "select id_membre from membre where id_club=$id_club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        /* $stmt->fetchall();  */
        /* $clubMembers = $stmt->fetchall();   */

        return $stmt;
    }
    public function getClubMembersRows($id_club){
        
        // this function returns associatuve array of club member_ids
        $sql = "select * from membre where id_club=$id_club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchall();  
        /* $clubMembers = $stmt->fetchall();   */

        return $result;
    }
    public function getAllMembersRows(){
        
        // this function returns associatuve array of club member_ids
        $sql = "select * from membre";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchall();  
        /* $clubMembers = $stmt->fetchall();   */

        return $result;
    }
    public function getClubRepID($id_club){
        
        // this function returns associatuve array of club member_ids
        $sql = "select rep from club where id=$id_club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        /* $stmt->fetchall();  */
        /* $clubMembers = $stmt->fetchall();   */
        $result=$stmt->fetch();
        return $result["rep"];
    }
    public function getClubRepName($id_club){
        $id_member = $this->getClubRepID($id_club);
        // this function returns associatuve array of club member_ids
        $sql = "select nom_complet from membre where id_membre=$id_member";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        /* $stmt->fetchall();  */
        /* $clubMembers = $stmt->fetchall();   */
        $result=$stmt->fetch();
        if (isset($result["nom_complet"])) {
            return $result["nom_complet"];
        }else return 'pas encors'; // put this back 
    }

    public function getClubMembersCount($id){
        
        $result= $this->getClubMembersID($id);
        $clubMembers= $result->rowCount();
    
        return $clubMembers;
    }
    
    public function delete($id){

            $sql = "delete from club where id=$id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            header('Location: ./index.php');
    }

    public function updateClub($nom,$description,$id,$newrepID,$fileDestination){
       
            $sql = "update club SET nom= '$nom',description='$description',rep='$newrepID',logo='$fileDestination' WHERE id=$id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $id;
        }
    
    public function saveReq($nom,$description,$id,$newrepID){
       
            $sql = "update club SET nom= '$nom',description='$description',rep=$newrepID WHERE id=$id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $id;
        }
    
    
} 
