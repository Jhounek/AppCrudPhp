<?php

class Products extends Database{
    
    //IT CREATE A PRODUCT------------------------------------------
    public function Create ($data){
        try{
            $result = parent::connection()->prepare("INSERT INTO productos(Nombre,Referencia,Precio,Peso,Categoria,Stock,FechaVenta) VALUES(?,?,?,?,?,?,?)");
            $result->bindParam(1,$data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2,$data['Referencia'], PDO::PARAM_STR);
            $result->bindParam(3,$data['Precio'], PDO::PARAM_INT);
            $result->bindParam(4,$data['Peso'], PDO::PARAM_INT);
            $result->bindParam(5,$data['Categoria'], PDO::PARAM_STR);
            $result->bindParam(6,$data['Stock'], PDO::PARAM_INT);
            $result->bindParam(7,$data['FechaVenta'], PDO::PARAM_STR);
            return $result->execute();
        }
        catch(Exception $e){
            die("Error al crear el producto" . $e->getMessage());
        }
    }

    //IT BRING THE PRODUCT LIST------------------------------------------
    public function List (){
        try{
            $result = parent::connection()->prepare("SELECT * FROM productos");
            $result->execute();
            return $result->fetchAll();
        }
        catch(Exception $e){
            die("Error al listar productos" . $e->getMessage());
        }
    }

    //IT DELETE A PRODUCT BY ID------------------------------------------
    public function Drop($Id){
        try{
            $result = parent::connection()->prepare("DELETE FROM productos WHERE Id = ".$Id);
            return $result->execute();
        }
        catch(Exception $e){
            die("Error al eliminar el producto" . $e->getMessage());
        }
    }

    //IT BRING THE PRODUCT LIST BY ID------------------------------------------
    public function ListById ($Id){
        try{
            $result = parent::connection()->prepare("SELECT * FROM productos WHERE Id=".$Id);
            $result->execute();
            return $result->fetchAll();
        }
        catch(Exception $e){
            die("Error al listar el producto" . $e->getMessage());
        }
    }

    //IT UPDATE A PRODUCT BY ID------------------------------------------
    public function Update($data){
        try{
            $result = parent::connection()->prepare("UPDATE productos SET Nombre = ?,Referencia = ?, Precio = ?,Peso = ?,Categoria = ?,Stock=?, FechaCreacion = ?, FechaVenta=? WHERE Id =?");
            $result->bindParam(1,$data['Nombre'], PDO::PARAM_STR);
            $result->bindParam(2,$data['Referencia'], PDO::PARAM_STR);
            $result->bindParam(3,$data['Precio'], PDO::PARAM_INT);
            $result->bindParam(4,$data['Peso'], PDO::PARAM_INT);
            $result->bindParam(5,$data['Categoria'], PDO::PARAM_STR);
            $result->bindParam(6,$data['Stock'], PDO::PARAM_INT);
            $result->bindParam(7,$data['FechaCreacion'], PDO::PARAM_STR);
            $result->bindParam(8,$data['FechaVenta'], PDO::PARAM_STR);
            $result->bindParam(9,$data['Id'], PDO::PARAM_INT);
            return $result->execute();
        }
        catch(Exception $e){
            die("Error al Editar el producto" . $e->getMessage());
        }
    }
}