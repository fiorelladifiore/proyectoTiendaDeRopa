<?php

require_once "app/controller/homeController.php";
require_once "app/controller/storesController.php";

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
        case 'clothes':
    //         echo "productos";
    //         break;

        case 'stores':
            $controller = new storesController();
            $controller->showingStores();
            break;

      default:
    //     $err = new ErrController();
    //     $err->showErr("404 not found");
    }