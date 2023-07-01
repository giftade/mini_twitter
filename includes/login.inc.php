<?php 
session_start();
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $_SESSION['username'] = $username;

include "../classes/dbh.classes.php";
include "../classes/login.classes.php";
include "../classes/login-contr.classes.php";
include "../classes/tweetDisplay-contr.classes.php";
$login = new LoginContr($username,$password);
$login->loginUser();


header('location: ../views/index.php?error=none');
}

//display error message
$error = '';
if (isset($_GET['error']) &&  $_GET['error'] == "wrongpassword") {
  $error =  "Password is Incorrect";
} else if (isset($_GET['error']) && $_GET['error'] == "usernotfound") {
  $error = "User does not exist";
}

//Preserves users input when form is submitted and there's an error;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  unset($_SESSION['username']);
}
