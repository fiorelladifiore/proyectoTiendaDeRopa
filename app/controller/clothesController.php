<?php

require_once "app/view/clothesView.php";
require_once "app/model/clothesModel.php";
require_once "helpers/authHelpers.php";

class clothesController {
    private $model;
    private $view;
    private $err;

    public function __construct()
     {
        
        $this->model = new clothesModel();
        $this->view = new clothesView();
        $this->err = new errView();
     }

    function showingClothes(){
        $clothes = $this->model->getAll();
        $this->view->showClothes($clothes);
    }

    
    function showingProd($id){
    if(authHelpers::checkLogged()){
        $storePS = $this->model->getProd($id);
        $this->view->showStoreProd($storePS);
        }else{
        $this->err->showErr("No existe la tarea con id: $id");
        }
    }



}




