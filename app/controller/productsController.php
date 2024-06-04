<?php

require_once "app/view/productsView.php";
require_once "app/model/productsModel.php";
require_once "app/model/storesModel.php";


class productsController {
    private $model;
    private $storesModel;
    private $view;
    private $err;

    public function __construct()
     {
        $this->model = new productsModel();
        $this->view = new productsView();
        $this->storesModel = new storesModel();
        $this->err = new errView();
     }

    function showingProducts($id = null){
        $stores = $this->storesModel->getAll();
        $products = $this->model->getStoAndProd();
        $this->view->showProducts($stores, $products);
    }

    function showingProduct($id){
            $product=$this->model->getProduct($id);
            $this->view->showProduct($product);
    }

    function showingStoreProd($id){
            $storePS = $this->model->getProdStore($id);
            $this->view->showStoreProd($storePS);
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
                if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png"){
                    $imagen = $_FILES['imagen']['name'];
                    $tmp_name = $_FILES['imagen']['tmp_name'];
                    $destination = "img/" . $imagen;
                    
                    if (move_uploaded_file($tmp_name, $destination)) {
                        $this->model->addProduct($tipo, $descripcion, $talle, $precio, $id_tienda, $imagen);
                        header("Location: " . BASE_URL . "products");
                        }else{
                        $this->err->showErr("Ocurrió un error con la conexión");
                        }
                    }else{
                    $this->err->showErr("Formato de imagen incorrecto");
                    }   
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




