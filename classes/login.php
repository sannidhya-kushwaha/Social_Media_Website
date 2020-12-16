<?php

class Login{

    private $error = "";

    function evaluate(){

        
    }

    public function create_user($data){

        $email = addslashes($data['email']);
        $password = addslashes($data['password']);
        
    
            // $query = "select * from users where email= '$email' limit 1";
            
           $query =  "SELECT FROM `users` WHERE email= '$email' limit 1";
        
            echo $query;
    
            $DB = new Database();
           $result = $DB->read($query);

           
        }
       
}