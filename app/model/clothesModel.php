<?php

require_once "app/model/model.php";

class clothesModel extends model{

    function getAll(){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT r.tipo, r.talle, r.precio, r.descripcion, t.nombre, t.direccion FROM ropa r, tienda t WHERE r.id_tienda = t.id_tienda");
        $sentencia->execute();
        $clothes= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $clothes;
    }

    function getProd($id){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT * FROM ropa r WHERE r.id_tienda = ?");
        $sentencia->execute([$id]);
        $prod = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $prod;
    }
}