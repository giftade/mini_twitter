<?php 

class Signup extends Dbh 
{
  protected function checkUser($name, $email){
    $stmt = $this->connect()->prepare('SELECT name FROM users WHERE name = ? OR email = ?');
    
    if(!$stmt->execute(array($name,$email))){
      $stmt = null;
      header('location: ../signup.php?error=stmtfailed');
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

  protected function setUser(){
    return 'me';
  }
}