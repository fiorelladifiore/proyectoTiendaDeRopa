<?php

require_once "app/model/storesModel.php";
require_once "app/view/storesView.php";

class storesController{
        private $model;
        private $view;

        public function __construct()
        {
            $this->model = new storesModel();
            $this->view = new storesView();
        }

        function showingStores(){
            $stores = $this->model->getAll();
            $this->view->showStores($stores);
        }
        
        function newStore(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(!empty($_POST['nombre']) && !empty($_POST['direccion'])&&
                isset($_POST['telefono']) && !empty($_POST['email'])
                ){
                    $nombre = $_POST['nombre'];
                    $direccion = $_POST['direccion'];
                    $telefono = $_POST['telefono'];
                    $email = $_POST['email'];
                    $this->model->insertStore($nombre, $direccion, $telefono, $email);
                    header("Location:".BASE_URL."stores");             
    
                }else{
                    echo "Faltan datos";   
                }
            }
        }

        function deleteStore($id){
            $store = $this->model->deleteStore($id);
            header("Location:".BASE_URL."stores");
        }

        function editStore($id){
            $store = $this->model->getStore($id);
            $this->view->showEditForm($store);
        }

        function updateStore(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(!empty($_POST['nombre_e']) && !empty($_POST['direccion_e'])&&
                isset($_POST['telefono_e']) && !empty($_POST['email_e'])
                ){
                    $nombre = $_POST['nombre_e'];
                    $direccion = $_POST['direccion_e'];
                    $telefono = $_POST['telefono_e'];
                    $email = $_POST['email_e'];
                    $id_tienda = $_POST['id_tienda'];
                    $this->model->updateStore($nombre, $direccion, $telefono, $email, $id_tienda);
                    header("Location:".BASE_URL."stores");             
    
                }else{
                    echo "Faltan datos";   
                }
            }
        }
        

}