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
        
        // function showAdmOptions(){
        //     $this->view->showFormAddStores();
        // }




        // if( $this->checkLogged()){
        // public function checkLogged() {
        //     if (session_status() != PHP_SESSION_ACTIVE){
        //         session_start();
        //     }
        //     if (!isset($_SESSION['IS_LOGGED'])) {
        //         header('Location: ' . BASE_URL . "login");
        //         die();  
        //     } else{
    
        //         return true;
        //     } 
        // }

}