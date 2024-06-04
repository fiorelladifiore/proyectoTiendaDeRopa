<?php

require_once "app/controller/homeController.php";
require_once "app/controller/storesController.php";
require_once "app/controller/authController.php";
require_once "app/controller/clothesController.php";
require_once "app/controller/errController.php";

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
        case 'storeProd':
            $controller = new clothesController();
            $controller->showingStoreProd($parametro[1]);
            break;
        case 'addStore':
            $controller = new storesController();
            $controller->newStore();
            break;
        case 'deleteStore':
            $controller = new storesController();
            $controller->deleteStore($parametro[1]);
            break;
        case 'editStore':
            $controller = new storesController();
            $controller->editStore($parametro[1]);
            break;
        case 'updateStore':
            $controller = new storesController();
            $controller->updateStore($parametro[1]);
            break;
        case 'products':
            $controller = new clothesController();
            $controller->showingClothes();
            break;
        case 'product':
            $controller = new clothesController();
            $controller->showingProduct($parametro[1]);
            break;
        case 'editProduct':
            $controller = new clothesController();
            $controller->editProduct($parametro[1]);
            break;
        case 'updateProduct':
            $controller = new clothesController();
            $controller->updateProduct($parametro[1]);
            break;
        case 'deleteProd':
            $controller = new clothesController();
            $controller->deleteProduct($parametro[1]);
            break;
        case 'addProd':
            $controller = new clothesController();
            $controller->newProduct();
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
            password_hash ($password, PASSWORD_DEFAULT);  
            break;
        default:
            $err = new errController();
            $err->showErr("404 not found");
    }