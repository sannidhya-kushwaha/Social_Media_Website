<?php

class Signup{

    private $error = "";

   public function evaluate($data){
        foreach ($data as $key => $value) {
            if(empty($value)){
                // $error .= $key . "is empty!<br>";
                $this->error = $this->error . $key . "is empty!<br>";
               
            }
        }
        if($this->error == ""){
            //no error
            $this->create_user($data);

            }else{
                return $this->error;
        }
    }

   public function create_user($data){

    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $gender = $data['gender'];
    $email = $data['email'];
    $password = $data['password'];
    $url_address = strtolower($this->firstname) . "." . strtolower($this->lastname);
    $userid = $this->create_userid();

        $query = "insert into users
         (userid,first_name,last_name,gender,email,password,url_address)
          values
           ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";
        return $query;
        $DB = new Database();
        $DB->save($query);
    }
   
    private function create_userid(){
        $length = rand(4,19);
        $number = "";
        
        for ($i=0; $i < $length; $i++) { 
            # code...
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }
}