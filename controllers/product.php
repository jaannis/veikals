<?php

//get info from database and sends it to product page
$database = new QueryBuilder($pdo);
$lists = $database->selectAll('lists');

require 'views/product.view.php';
