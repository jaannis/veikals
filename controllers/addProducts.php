<?php

//gets info from add page to send further,
//where will process everything and send to database

$type = array_values(['type' => $_POST['type']]);

//search correct type to use right controller
if (in_array('Size', $type)) {
    $insert = new Size($pdo);
    $insert->store('lists', [
    'sku' => $_POST['sku'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'type' => $_POST['type'],
    'size' => $_POST['size']
    ]);
} elseif (in_array('Dimensions', $type)) {
    $insert = new Dimensions($pdo);
    $insert->store('lists', [
    'sku' => $_POST['sku'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'type' => $_POST['type'],
    'height' => $_POST['height'],
    'width' => $_POST['width'],
    'length' => $_POST['length']
    ]);
} else {
    $insert = new Weight($pdo);
    $insert->store('lists', [
    'sku' => $_POST['sku'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'type' => $_POST['type'],
    'weight' => $_POST['weight']
    ]);
}

//redirect back to add page
header('Location: /add');
