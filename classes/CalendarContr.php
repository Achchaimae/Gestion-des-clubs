<?php

include_once PROJ_DIR . "/models/TodoModel.php";

class calendarContr {
   
    protected $model;
    public function listEvent(){
        //Get List
        $event = $this->model->listEvenement();
        
         require_once PROJ_DIR . "/views/pages/calendar.php";
        return ;
    }
}

?>