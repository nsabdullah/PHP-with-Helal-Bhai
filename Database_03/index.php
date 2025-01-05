<?php
$server = "localhost";
$user = "root";
$password = "";
$name = "user information";


// Server connection 
$conn = mysqli_connect($server, $user, $password, $name);


if(!$conn){
  echo "Faliure";
}else{
  echo "Success";
}


$sql = "INSERT INTO 'form data' ('name', 'email', 'password') VALUES ('Helal', 'rtuhsrtjh', '1234')";

// localhost/PHP_with_Helal_Bhai/Database_03/index.php
?>