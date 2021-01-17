<?php

    // $router->define([

    //     '' => 'controllers/index.php',

    //     'product' => 'controllers/product.php',

    //     'contact' => 'controllers/contact.php',

    //     'about' => 'controllers/about.php',

    //     'users' => 'controllers/user.php',

    // ]);

    // $router->get('','controllers/index.php');
    // $router->get('product','controllers/product.php');
    // $router->get('contact','controllers/contact.php');
    // $router->get('about','controllers/about.php');
    // $router->post('users','controllers/user.php');
    // $router->get('users','controllers/userget.php');


    $router->get('','PageController@home');

    $router->get('product','PageController@product');

    $router->get('about','PageController@about');

    $router->get('contact','PageController@contact');

    $router->get('users','UserController@index');

    $router->post('users','UserController@store');

?>
