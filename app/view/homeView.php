<?php

require_once "templates/htmlStart.php";
require_once "templates/htmlHome.php";
require_once "templates/htmlEnd.php";


class homeView{
    
    function showHome(){
        htmlStart();
        htmlHome();
        htmlEnd();
    }
}