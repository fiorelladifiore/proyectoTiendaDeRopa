<?php

require_once "app/view/homeView.php";

class homeController{
    private $view;

    public function __construct()
    {
        $this->view = new homeView();
    }

    function showingHome(){
        $this->view->showHome();
    }
}