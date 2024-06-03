<?php

require_once "app/model/model.php";

class clothesModel extends model{

    function getAll(){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT * FROM ropa");
        $sentencia->execute();
        $clothes= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $clothes;
    }

    function getProdStore($id){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT * FROM ropa r WHERE r.id_tienda = ?");
        $sentencia->execute([$id]);
        $prod = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $prod;
    }

    function getProduct($id){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT * FROM ropa WHERE id_ropa=?");
        $sentencia->execute([$id]);
        $product= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }

    function deleteProduct($id){
        $db = $this->getConnection();
        $resultado=$db->prepare("DELETE FROM ropa WHERE id_ropa=?");
        $resultado->execute([$id]);
    }

    function addProduct($tipo, $descripcion, $talle, $precio, $id_tienda){ 
            $db = $this->getConnection();
            $resultado= $db->prepare("INSERT INTO ropa (tipo, descripcion, talle, precio, id_tienda) VALUES (?,?,?,?,?)");
            $resultado->execute([$tipo, $descripcion, $talle, $precio, $id_tienda]); 
    }

        function getStoAndProd(){
            $db = $this->getConnection();
           
            $sentencia = $db->prepare("SELECT * FROM ropa r, tienda t WHERE r.id_tienda = t.id_tienda");
            $sentencia->execute();
            $stores = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $stores;
        }
    }



