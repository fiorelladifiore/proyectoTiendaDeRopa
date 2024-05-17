<?php

require_once "templates/htmlStart.php";
require_once "templates/htmlHome.php";

class homeView{
    
    function showHome(){
        htmlStart();
        htmlHome();
    }
}