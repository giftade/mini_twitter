<?php 

class Signup extends Dbh 
{
  //Adds user to database
  protected function setUser($name, $email,$password)
  {
    $stmt = $this->connect()->prepare("INSERT INTO users (name, email, password) VALUES(?,?,?)");

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (!$stmt->execute(array($name, $email, $hashedPassword))) {
      $stmt = null;
      header('location: ../views/signup.php?error=stmtfailed');
      exit();
    }

    $stmt = null;
  }
    //Returns a user based on the email or username
  protected function checkUser($name, $email){
    $stmt = $this->connect()->prepare('SELECT name FROM users WHERE name = ? OR email = ?');
    
    if(!$stmt->execute(array($name,$email))){
      $stmt = null;
      header('location: ../views/signup.php?error=stmtfailed');
      exit();
    }

    $resultCheck = "";
    if($stmt->rowCount() > 0){
      $resultCheck = false;
    }else{
      $resultCheck = true;
    }
    return $resultCheck;
  }

 
}