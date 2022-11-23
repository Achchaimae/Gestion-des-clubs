<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class ClubModel extends dbh{

    public function createClub($nom,$description,$datecreation,$logo){
        $sql = "insert into club (nom,description,date_creation,logo) values(?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        print $stmt->execute([$nom,$description,$datecreation,$logo]);
/*         var_dump($this->connect());
 */    
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
        $sql = "select * from club where id_club=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
      /*  return $stmt; */
    }

    // public function getMembers($id_club){
        
    //     // this function returns associatuve array of club member_ids
    //     $sql = "select id_membre from membre where id_club=$id_club";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute();
    //     $results = $stmt->fetch();  

    //     $test = array_values($results);

    //     return $results;
    // }
   
} 




/*         print_r(array_count_values($results));
 */        /* var_dump($results); */