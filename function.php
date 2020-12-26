<?php

    function connectToDb(){

        try{

            return new PDO('mysql:host=127.0.0.1;dbname=phpclass','root','');

        }
        catch(PDOException $e){

            die($e->getMessage());

        }

    }

    function selectAll($pdo,$table){

        $statement = $pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);

    }

    function dd($value){

        echo "<pre>";

        die(var_dump($value));

        echo "</pre>";

    };



?>

