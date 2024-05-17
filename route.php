<?php

require_once "app/controller/homeController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'home';
    }

    $action = $_GET['action'];
    $parametro = explode('/', $action);
   
    switch ($parametro[0]) {
        case 'home':
            $controller = new homeController();
            $controller->showingHome();
        break;
        case 'products':
    //         echo "productos";
    //         break;

    //     case 'stores':
    //         echo "stores";
    //         break;

      default:
    //     $err = new ErrController();
    //     $err->showErr("404 not found");
    }