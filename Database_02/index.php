<?php
// connection with database
$serverName = "localhost";
$userNAme = "root";
$password = "";

// connection 
$connection = mysqli_connect($serverName, $userNAme, $password);

if($connection){
  echo "Database connected";
}












?>
