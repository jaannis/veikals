<?php

 abstract class Type extends QueryBuilder
 {
     public function __construct($pdo)
     {
         parent::__construct($pdo);
     }

     abstract protected function store($table, $parameters);
 }
