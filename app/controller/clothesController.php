<?php

require_once "app/view/clothesView.php";
require_once "app/model/clothesModel.php";
require_once "app/model/storesModel.php";

class clothesController {
    private $model;
    private $storesModel;
    private $view;
    private $err;

    public function __construct()
     {
        $this->model = new clothesModel();
        $this->view = new clothesView();
        $this->storesModel = new storesModel();
        $this->err = new errView();
     }

    function showingClothes($id = null){
        $stores = $this->storesModel->getAll();
        $products = $this->model->getStoAndProd();
        $this->view->showClothes($stores, $products);
    }

    function showingProduct($id){
        if(authHelpers::checkLogged()){
            $product=$this->model->getProduct($id);
            $this->view->showProduct($product);
        }else{
            $this->err->showErr("No existe el producto con id: $id");
            }
    }
    
    function showingStoreProd($id){
        if(authHelpers::checkLogged()){
            $storePS = $this->model->getProdStore($id);
            $this->view->showStoreProd($storePS);
            }else{
            $this->err->showErr("No existe el producto con id: $id");
            }
        }

    function deleteProduct($id){
        $this->model->deleteProduct($id);
        header("Location:".BASE_URL."products");
    }

    function newProduct(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['tipo']) && !empty($_POST['descripcion'])&&
            isset($_POST['talle']) && isset($_POST['precio'])
            ){
                $tipo = $_POST['tipo'];
                $descripcion = $_POST['descripcion'];
                $talle = $_POST['talle'];
                $precio = $_POST['precio'];
                $id_tienda = $_POST['id_tienda'];
                $this->model->addProduct($tipo, $descripcion, $talle, $precio, $id_tienda);
                header("Location:".BASE_URL."products");             
            }else{
                $this->err->showErr("Faltan datos");    
            }
        }
    }

    function editProduct($id){
        $product = $this->model->getProd($id);
        $this->view->showEditFormProduct($product);
    }

    function updateProduct(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['tipo']) && !empty($_POST['descripcion'])&&
            isset($_POST['talle']) && !empty($_POST['precio'])
            ){
                $tipo = $_POST['tipo'];
                $descripcion = $_POST['descripcion'];
                $talle = $_POST['talle'];
                $precio = $_POST['precio'];
                $id_ropa = $_POST['id_ropa'];
                $this->model->updateProduct($tipo, $descripcion, $talle, $precio, $id_ropa);
                header("Location:".BASE_URL."products");             

            }else{
                $this->err->showErr("Faltan datos");    
            }
        }
    }
    
}




