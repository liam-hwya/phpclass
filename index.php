<?php 

    require 'function.php';

    class Task{

        protected $description;

        public $completed = false;

        public function __construct($description){

            $this->description = $description;

        }

        public function isComplete(){

            return $this->completed;

        }

        public function complete(){

            $this->completed = true;

        }

        public function getDescription(){

            return $this->description;

        }

    }

    $tasks = [

        new Task('Go to the store'),

        new Task('Go to the home'),

        new Task('Do homework'),

    ];

    $tasks[1]->complete();


    require 'index.view.php';





?>

