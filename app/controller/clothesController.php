<?php

require_once "app/view/clothesView.php";
require_once "app/model/clothesModel.php";

class clothesController {
    private $model;
    private $view;
    // private $err;

    public function __construct()
     {
        $this->model = new clothesModel();
        $this->view = new clothesView();
     }

    function showingClothes(){
        $clothes = $this->model->getAll();
        $clothes = $this->view->showClothes($clothes);
    }

    function showingProduct($id){
        $product=$this->model->getProduct($id);
        $product= $this->view->showProduct($product);
    }
    
    function showingProd($id){
        if(authHelpers::checkLogged()){
            $storePS = $this->model->getProd($id);
            $this->view->showStoreProd($storePS);
            }else{
            $this->err->showErr("No existe la tarea con id: $id");
            }
        }

    function deleteProduct($id){
        $this->model->deleteProduct($id);
        header("Location:".BASE_URL."products");
    }

    function addProduct(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['tipo']) && !empty($_POST['descripcion'])&&
            isset($_POST['precio']) && $_POST['precio'] !== ""){
                $tipo = $_POST['tipo'];
                $descripcion = $_POST['descripcion'];
                $talle = $_POST['talle'];
                $precio = $_POST['precio'];
                $this->model->addProduct($tipo, $descripcion, $talle , $precio);
                var_dump($tipo);die();
                header("Location:".BASE_URL."products");
                
            }
        }
    }



}




