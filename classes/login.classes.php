<?php 
class Login extends Dbh
{
  //checks if the user exists 
  protected function getUser($name, $password) {
      $stmt = $this->connect()->prepare("SELECT * FROM users WHERE name = ? OR email = ? LIMIT 1");

      
    if(!$stmt->execute(array($name,$name))){
      $stmt = null;
      header('location: ../login.php?error=stmtfailed');
      exit();
    }    

   
    
    if($stmt->rowCount() === 1){
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $username = $row['name'];
      $hashedPassword = $row['password'];
      
    //verifies users password

      if(password_verify($password,$hashedPassword)){
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $username;

      }else {
        $stmt = null;
        header('location: ../login.php?error=wrongpassword');
        exit();
      }
    } else {
      $stmt = null;
      header('location: ../login.php?error=usernotfound');
      exit();
    }

 
  }
}