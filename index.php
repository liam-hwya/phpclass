<?php


    require 'function.php';

    $pdo = connectToDb();
    
    $tasks = selectAll($pdo,'tasks');
    

    require 'index.view.php';





?>

