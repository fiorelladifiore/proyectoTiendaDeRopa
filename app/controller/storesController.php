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
            $stores = $this->view->showStores();
        }
}