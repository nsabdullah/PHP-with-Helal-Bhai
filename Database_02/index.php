<?php
echo '<pre>';
// connection with database
$serverName = "localhost";
$userNAme = "root";
$password = "";
$dbName = "users";

// connection 
$connection = mysqli_connect($serverName, $userNAme, $password , $dbName);
if($connection){
  echo "Database connected";
}
$sql = "INSERT INTO submitted (name, email, password) VALUES ('Abdullah', 'dsgth@gmail.com' 'srtyhs')";
 

$insert = mysqli_query($connection, $sql);
if($insert){
  echo "Data inserted";
}else{  
  echo "Data not inserted";
}

?>
