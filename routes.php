<?php

//makes sure that url gets to right controller
$router->get('', 'controllers/product.php');
$router->get('add', 'controllers/add.php');
$router->post('new', 'controllers/addProducts.php');
$router->post('delete', 'controllers/deleteProducts.php');

