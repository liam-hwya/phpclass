<?php

 class UserController{


    public function index(){

        $users = App::get('database')->selectAll('users');
        

        return view('user',[

            'users' => $users,

        ]);
      
    }

    public function store(){

        App::get('database')->insert('users',[

            'username' => $_POST['username']

        ]);

        return redirect('users');
      
    }
    
    

 }

?>