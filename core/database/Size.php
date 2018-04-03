<?php

class Size extends Type
{    
    public function __construct($pdo)
    {
        parent::__construct($pdo);
              
    }
    //inserts size type to database
    public function store($table, $parameters)
    {           
        try {        
            $sql = "INSERT INTO $table (sku, name, price, type, size)
            VALUES (:sku, :name, :price, :type, :size)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);            
        } catch (Exception $e) {
        die($e->getMessage());
        }
    }    
}