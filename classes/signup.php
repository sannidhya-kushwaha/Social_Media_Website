<?php

class Signup{
    private $error = "";

   public function evaluate($data){
        foreach ($data as $key => $value) {
            if(empty($value)){
                // $error .= $key . "is empty!<br>";
                $error = $key . "is empty!<br>";
            }
        }
        if($error == ""){
            //no error
            $this->create_user($data);

            }else{
                return $error;
        }
    }

   public function create_user($data){

    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $gender = $data['gender'];
    $email = $data['email'];
    $password = $data['password'];
    $url_address = $data['url_address'];
    $userid = $data['userid'];

        $query = "insert into users
         (userid,first_name,last_name,gender,email,password,url_address)
          values
           ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";
        $DB = new Database();
        $DB->save($query);
    }
}