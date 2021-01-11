<?php

 class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){

        $this->pdo = $pdo;

    }

    public function selectAll($table){

        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);

    }

    public function insert($table,$parameters){

        //insert into users (username,email) values (:username,:email);

        $query = sprintf(

            'insert into %s (%s) values (%s)',

            $table,

            implode(',',array_keys($parameters)), //username,email

            ':'.implode(',:',array_keys($parameters)) //:username,:email,:password

        );

        try{
        
            $statement = $this->pdo->prepare($query);

            $statement->execute($parameters);
        
        }catch(Exception $e){
        
          die($e->getMessage());
        
        }

        

        
      
    }
    

 }

?>