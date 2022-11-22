<?php

include_once PROJ_DIR . "/models/ClubModel.php";
include_once PROJ_DIR . "/models/TodoModel.php";

class ViewsClass {
   
    protected $model;
    protected $todo;
    public function __construct()
    {
        $this->model = new ClubModel();
        $this->todo = new TodoModel();
    }
    

    public function updateAdmin(){
        //Get List
        $listtodos = $this->model->listClubs();
        $listclubs = $this->todo->listTodo();
        
        require_once PROJ_DIR . "/views/admin.php";
         
        return ;
    }

} 