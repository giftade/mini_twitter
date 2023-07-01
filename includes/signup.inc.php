 <?php
 session_start();
$username = "";
$email = "";
$password = "";
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //assign user input to variables
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //store users inputs in a session 
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  
include "../classes/dbh.classes.php";
include "../classes/signup.classes.php";
include "../classes/signup-contr.classes.php";
$signup = new SignupContr($username, $email, $password);
$signup->signupUser();
  if (isset($_POST['username'])) {
    $username =  $_POST['username'];
  }
  
header('location: ../views/login.php?error=none');
 
  }

  //display error
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

  //Preserves users input when form is submitted and there's an error;
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    unset($_SESSION['username']);
  }
  if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    unset($_SESSION['email']);
  }


  ?>
   
   