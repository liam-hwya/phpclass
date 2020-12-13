<?php

    $person = [

        'age' => '20',

        'hairColor' => 'black',

        'career' => 'web developer',

        'school' => 'myanmar school'

    ];

    // $tasks =  title, assigned_to, completed


    $person['address'] = 'Yangon';

    unset($person['school']);


    // die(var_dump($person));

    var_dump($person);

    echo "keep going";
    
    require 'index.view.php';



?>


