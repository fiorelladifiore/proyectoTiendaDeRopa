<?php

require_once "app/model/model.php";

class clothesModel extends model{

    function getAll(){
        $db = $this->getConnection();

        $sentencia = $db->prepare("SELECT * FROM ropa");
        $sentencia->execute();
        $clothing= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $clothing;
    }
}