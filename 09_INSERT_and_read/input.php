<?php
// Connect with database
$server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "users";

// connect 
$connect = mysqli_connect($server, $db_user, $db_password, $db_name);
if($connect ){
  echo " Connected " . "<br>";
}

// Insert data

// Inser Data
$username = $_REQUEST['name'];
$useremail = $_REQUEST['email'];
$userpass = $_REQUEST['password'];

$sql = "INSERT INTO information (name, email, password) VALUES ('$username', '$useremail', '$userpass')";

$insert_data = mysqli_query($connect, $sql);

if($insert_data){
	echo "Data inserted!" . "<br>";
}else{
  echo "Data not inserted!";
}
// include "input.php";
// localhost/PHP_with_Helal_Bhai/09_INSERT_and_read/input.php

?>