<?php

require_once "config.php";

class model{
    private $connection;
    
    public function __construct()
    {
        $this->connection = $this->getConnection();
        $this->deploy();
    }

    function getConnection(){
        try {
            $db = new PDO("mysql:host=".MYSQL_HOST.";charset=utf8", MYSQL_USER, MYSQL_PASS);
           
            $this->createOrUseDatabase($db);

        
        } catch(Exception $e){
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }

        return $db;
    }
    
    private function createOrUseDatabase($db){
        $query = $db->query("SHOW DATABASES LIKE '".MYSQL_DB."'");
        $databaseExists = $query->rowCount() > 0;

        if(!$databaseExists) {
            $db->query("CREATE DATABASE ".MYSQL_DB."");
        }
        
        $db->query("USE ".MYSQL_DB."");
    }

    private function deploy(){
        $this->createTables();           
    }

    
    private function createTables(){
        $sql = "CREATE TABLE IF NOT EXISTS `ropa` (
            `id_ropa` int(11) NOT NULL,
            `tipo` varchar(250) NOT NULL,
            `descripcion` varchar(250) NOT NULL,
            `precio` double(10,2) NOT NULL,
            `talle` int(11) NOT NULL,
            `id_tienda` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

            CREATE TABLE `tienda` (
            `id_tienda` int(11) NOT NULL,
            `nombre` varchar(100) NOT NULL,
            `direccion` varchar(100) NOT NULL,
            `telefono` int(11) NOT NULL,
            `email` varchar(250) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        
        ";
        
        $this->connection->query($sql);
    }




}