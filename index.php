<?php



    $query = require 'bootstrap.php';
    

    $tasks = $query->selectAll('tasksa');
    

    require 'index.view.php';


    


?>

