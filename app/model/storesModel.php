<?php

require_once "app/model/model.php";

class storesModel extends model{

    function getAll(){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT * FROM tienda");
        $sentencia->execute();
        $stores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $stores;
    }

}