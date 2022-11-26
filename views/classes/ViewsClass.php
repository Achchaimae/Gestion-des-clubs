<?php

include_once PROJ_DIR . "/models/ClubModel.php";
include_once PROJ_DIR . "/models/TodoModel.php";
include_once PROJ_DIR . "/models/UserModel.php";

class ViewsClass {
   
    protected $model;
    protected $todo;
    protected $user;
    public function __construct()
    {
        $this->model = new ClubModel();
        $this->todo = new TodoModel();
        $this->user = new UserModel();
    }
    
    public function updateAdmin(){
        //Get List
        $listclubs = $this->todo->listTodo();
        $listtodos = $this->model->listClubs();
        $listusers = $this->user->listUsers();
        
        require_once PROJ_DIR . "/views/pages/admin.php";
        return ;
    }
    
} 