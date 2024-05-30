<?php

require_once "app/controller/homeController.php";
require_once "app/controller/storesController.php";
require_once "app/controller/authController.php";
require_once "app/controller/clothesController.php";

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
        case 'stores':
            $controller = new storesController();
            $controller->showingStores();
            break;

        case 'store_prod':
            $controller = new clothesController();
            $controller->showingProd($parametro[1]);
            break;
        case 'products':
            $controller = new clothesController();
            $controller->showingClothes();
            break;
        case 'login':
            $controller = new authController();
            $controller->showingLogin();
            break;
        case 'verify':
            $controller = new authController();
            $controller->verify();
            break;
        case 'logout':
            $controller = new authController();
            $controller->logout();
                break;
        case 'hash':
            $password = "admin";
           
                // PARA EL MOMENTO DE REGISTRAR UN USUARIO UDS. DEBEN USAR ÉSTE ÚLTIMO
            echo password_hash ($password, PASSWORD_DEFAULT);  
            break;
        
        

      default:
    //     $err = new ErrController();
    //     $err->showErr("404 not found");
    }