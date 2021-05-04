<?php

class Database{
    public function Connection(){
        try{
            return new PDO('mysql:host=localhost;dbname=productosdb;charset=utf8;',
               'root',
               '',
               [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
        }
        catch(Exception $e){
            die("Error de conexion a base de datos" . $e->getMessage());
        }
    }
}