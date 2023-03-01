<?php 
session_start();
$varsesion= $_SESSION['usuario'];
if(!isset($varsesion)){
  echo 'usted no esta registrado';
  header('location: Login.php');
  error_reporting(0);
  die();
}


?>