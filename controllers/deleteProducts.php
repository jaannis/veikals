<?php

//gets info from add page to send further to querybuilder,
//which will process everything and delete right rows in database
$delete = new QueryBuilder($pdo);
$delete->delete('lists',[
    'ID' => $_POST['id'],
]);

//redirect back to add page
header('Location: /');