<?php


include_once  'C:\xampp\htdocs\Gestion-des-clubs\models\DemandeModel.php';
// die(dirname(__FILE__));
// include_once PROJ_DIR . "/models/ClubModel.php";

class DemandeContr {
    protected $model;

    public function __construct(){
        $this->model = new DemandeModel();
    }
    public function save($data) {
            // die(print_r($data));
        $res = $this->model->save($data['nom_complet'],$data['class'],$data['age'],$data['email'],$data['id_club']);
        $res ?  header('Location: http://localhost/Gestion-des-clubs/views/pages/club.php?id='. $data['id_club']) :  header('http://localhost/Gestion-des-clubs/views/pages/demande.php?id='. $data['id_club'] );
    }

    public function isClubExist($id) {
       return $this->model->isExist($id);
    }
}