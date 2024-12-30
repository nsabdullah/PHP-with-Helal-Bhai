<?php
// connect database in php


$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "my first database"

$con = mysqli_connect($server, $db_username, $db_password, $db_name);


if($con){
    echo "Database connected";
 
}

// insert data into php
$sql = "INSERT INTO users (name, email, password) VAlUES ('Amir', 'sdert@gmail.com', '123456')"; 


$insert = mysqli_query($con, $sql);

if($insert){
    echo "Data inserted"; 
  }
?>







