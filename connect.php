<?php

$host = "localhost";
$username = "root";
$password = "mysql";
$db = "mybook_db";


$connection = mysqli_connect($host, $username,$password, $db);




$query = "select * from users";

// $query = "insert into users (first_name, last_name) values ('$first_name', '$last_name')";




while($row = mysqli_fetch_assoc($result)){
    $result = mysqli_query($connection,$query);
    print_r($row);
}

// echo mysqli_error($connection);

