<?php
    require __DIR__ . './database.php';

    header('Content-Type: application/json');
    $json = json_encode($database);

    echo $json;
?>