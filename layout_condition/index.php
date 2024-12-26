<?php

include('layout/header.php');
 echo   '<h1> This is home page</h1>';
include('layout/footer.php');

/* redirect */
// $isLogged = false;
// if(!$isLogged){
//   header('Location: layout_condition/logIn.php');

$isLoggedin = true;

if(!$isLoggedin) {
  header('Location: layout_condition/logIn.php');
}
// localhost/PHP with Helal Bhai/layout_condition/index.php
?>