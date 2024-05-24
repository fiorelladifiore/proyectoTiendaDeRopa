<?php

require_once "view.php";


class homeView extends view{

    function showHome(){
        $this->smarty->display("htmlHome.tpl");
    }
}