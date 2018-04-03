<?php

//interacts with database what to do with files
class QueryBuilder
{
    protected $pdo;
   
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
  //gets files from database and shows in product page
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    //deletes files from database
    public function delete($table, $parameters)
    {      
        foreach($parameters as $array_id)
        {
            foreach($array_id as $id)
            {
            try {           
                $sql = "DELETE FROM $table
                    WHERE ID = $id";
                    $statement = $this->pdo->prepare($sql);
                    $statement->execute($array_id);                                
            } catch (Exception $e) {
                die($e->getMessage());
            }            
            }
        }    
    }
}

           
      
