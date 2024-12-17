<?php 
// For loop practice
$Student = array("Ahmad", "Tahmid","Muhammad","Mehmed","Hamid");



foreach($Student as $ite){
  echo  $ite . '</br>';
}





function sayHello() {
	return "Hello there  Abdullah! Bin Amir 😎😎 He love Ms. Fariya Akhter <br/>";
}

sayHello();
// for loop
for ( $i = 0; $i < 10; $i++ ) {
	echo  sayHello();
}

$languages = [ 'HTML', 'CSS', 'Javascript', 'PHP' ];

foreach ( $languages as $item ) {
	echo $item . "<br/>";
}


?>