<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class TodoModel extends dbh{

    public function addTodo($task){
        $sql = "insert into ToDo (task) values(?)";
        $stmt = $this->connect()->prepare($sql);
        
        $stmt->execute([$task]);
     
    }

    public function listTodo(){
        $sql = "select * from ToDo";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        /* $result = $stmt->fetchall();
        var_dump($result); */
       return $stmt;
            /* 0=>["id"=>1, "name"=>"club1"],
            1=>["id"=>2, "name"=>"club2"], */
        
    }
    public function DeleteTodo($id){
        $sql = "delete from Todo where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
    }

} 
