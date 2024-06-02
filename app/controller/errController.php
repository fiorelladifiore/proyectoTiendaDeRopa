<?php

require_once "app/view/errView.php";

class errController{
        private $err;

    public function __construct()
    {
        $this->err = new errView();
    }

    function showErr($msg){
        $this->err->showErr($msg);
    }
}