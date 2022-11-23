<?php

include_once PROJ_DIR . "/models/TodoModel.php";

class TodoContr {
   
    protected $model;
    public function __construct()
    {
        $this->model = new TodoModel();
    }

    
    public function addNewTodo($task){
     
         $this->model->addTodo($task);
          header('Location: ./index.php');
        return;
    }
  /*   public function listTodo(){
        //Get List
        $Todo = $this->model->listTodo();
        
         require_once PROJ_DIR . "/views/todos/list.php";
        return ;
    } */
    public function deleteTodo(){
        if(isset($_GET["id"]) && intval($_GET["id"]) > 0){
            $id = intval($_GET["id"]);
            //Get one club
            $this->model->DeleteTodo($id);
            header('Location: ./index.php');
            return;
        } else {
            die("Id is required");
        }
        
    }
    public function index(){
        //var_dump(PROJ_DIR);
        //require_once PROJ_DIR . "/views/clubs/index.php";
    }
} 