<?php

class Dimensions extends Type
{
    public function __construct($pdo)
    {
        parent::__construct($pdo);              
    }

    //inserts dimension type to database
    public function store($table, $parameters)
    {                 
        try {        
            $sql = "INSERT INTO $table (sku, name, price, type, height, width, length)
            VALUES (:sku, :name, :price, :type, :height, :width, :length)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);                         
        } catch (Exception $e) {
        die($e->getMessage());
        }
    }
}