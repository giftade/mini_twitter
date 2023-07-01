<?php
$username = "";
$email = "";
$password = "";
 
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
include "../classes/dbh.classes.php";
include "../classes/signup.classes.php";
include "../classes/signup-contr.classes.php";
$signup = new SignupContr($username, $email, $password);
$signup->signupUser();
  

header('location: ../views/login.php?error=none');
 
  }









 $error = '';
  if (isset($_GET['error']) &&  $_GET['error'] == "invalidUsername") {
    $error =  "Username is Invalid";
  } else if (isset($_GET['error']) && $_GET['error'] == "invalidPass") {
    $error = "Password is invalid";
  } else if (isset($_GET['error']) && $_GET['error'] == "invalidEmail") {
    $error = "Email is invalid";
  } else if (isset($_GET['error']) && $_GET['error'] == "userTaken") {
    $error = "Username or Email is already taken";
  }
  