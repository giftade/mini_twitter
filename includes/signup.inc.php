<?php 

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
include "../classes/dbh.classes.php";
include "../classes/signup-contr.classes.php";
include "../classes/signup.classes.php";

$signup = new SignupContr($username, $email, $password);









}