<?php

class Weight extends Type
{
    public function __construct($pdo)
    {
        parent::__construct($pdo);              
    }

    //inserts weight type to database
    public function store($table, $parameters)
    {                      
        try {        
            $sql = "INSERT INTO $table (sku, name, price, type, weight)
            VALUES (:sku, :name, :price, :type, :weight)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);                                 
        } catch (Exception $e) {
        die($e->getMessage());
        }            
    }
}