<?php

 
    class Router{

        protected $routes = [

            'GET' => [

            ],

            'POST' => [

            ]

        ];

        public static function load($file){

            $router = new static;

            require $file;

            return $router;
          
        }
        

        public function define($routes){

            $this->routes = $routes;
          
        }

        public function get($uri,$controller){

            $this->routes['GET'][$uri] = $controller;
          

        }

        public function post($uri,$controller){

            $this->routes['POST'][$uri] = $controller;
          
        }
        

        public function direct($uri,$requestType){

            if(array_key_exists($uri,$this->routes[$requestType])){

                return $this->callMethod(...explode('@',$this->routes[$requestType][$uri]));

            }

            throw new Exception("NO route defined");
          
        }

        public function callMethod($controller,$method){

            $controller = new $controller; 

            if(!method_exists($controller,$method)){

                throw new Exception('Method could not found');

            }

            return $controller->$method();
          
        }
        
        
        

    }

?>