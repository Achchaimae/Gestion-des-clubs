<?php

include_once PROJ_DIR . "/models/ClubModel.php";
include_once PROJ_DIR . "/models/TodoModel.php";
include_once PROJ_DIR . "/models/calendarModel.php";

class ViewsClass {
   
    protected $model;
    protected $todo;
    public function __construct()
    {
        $this->model = new ClubModel();
        $this->todo = new TodoModel();
        $this->event= new CalendarModel();
    }
    
    public function updateAdmin(){
        //Get List
        $listclubs = $this->todo->listTodo();
        $listtodos = $this->model->listClubs();
        $listEvent =$this->event->listEvenement();
        require_once PROJ_DIR . "/views/pages/admin.php";
        return ;
    }
    
} 