<?php

require_once "app/view/clothesView.php";
require_once "app/model/clothesModel.php";

class clothesController {
    private $model;
    private $view;
    private $err;

    public function __construct()
     {
        $this->model = new clothesModel();
        $this->view = new clothesView();
     }

    function showingClothing(){
        $clothing = $this->model->getAll();
        $clothing= $this->view->showClothing($clothing);
    }

    // mostrar detalles de procutos
    // function showArticle($id){
    //     $article = $this->model->getArticle($id);
    //     if($article){
    //         $this->view->showArticle($article);
    //     }else{
    //         $this->err->showErr("No existe la tarea con id: $id");
    //     }
    // }

    // function deleteArticle($id){
    //     $this->model->delete($id);
    //     header("Location:".BASE_URL."Clothes");
    // }

    // function newArticle(){
    //     if($_SERVER["REQUEST_METHOD"] == "POST"){
    //         if(!empty($_POST['tipo']) && !empty($_POST['descripcion'])&&
    //         isset($_POST['prioridad']) && $_POST['prioridad'] !== ""
    //         ){
    //             $nombre = $_POST['nombre'];
    //             $descripcion = $_POST['descripcion'];
    //             $prioridad = $_POST['prioridad'];
    //             $this->model->insertTask($nombre, $descripcion, $prioridad);
    //             header("Location:".BASE_URL."Clothes");             

    //         }else{
    //             $this->err->showErr("Faltan datos");   
    //         }
    //     }
    // }




}
