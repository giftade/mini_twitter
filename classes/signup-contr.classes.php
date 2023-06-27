<?php

class SignupContr extends Signup
{
  private string $username;
  private string $email;
  private string $password;

  public function __construct($username, $email, $password)
  {
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
   
  }

  private function signupUser(){
    if($this->emptyInput() == false){
      header('location: ../signup.php?error=emptyInput');
      exit();
    }

    if ($this->invalidUsername() == false) {
      header('location: ../signup.php?error=invalidUsername');
      exit();
    }

    if ($this->invalidPassword() == false) {
      header('location: ../signup.php?error=invalidPass');
      exit();
    }

    if ($this->invalidEmail() == false) {
      header('location: ../signup.php?error=invalidEmail');
      exit();
    }

    if ($this->userTaken() == false) {
      header('location: ../signup.php?error=userTaken');
      exit();
    }

    $this->setUser();
  }

  private function emptyInput(){
    $result = '';
    if(empty($this->username) || empty($this->email) || empty($this->password)){
        $result = false;
    }else{
      $result = true;
    }
    return $result;
  }

  private function invalidUsername(){
    $result = "";
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
      $result = false;
    }else{
      $result = true;
    }
    return $result;
  }

  private function invalidEmail()
  {
    $result = "";
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function invalidPassword(){
    $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
    $result = '';
    if (!preg_match($pattern, $this->password)) {
      $result = false;
  }else{
    $result = true;
  }
  return $result;
}

  private function userTaken()
  {
   $result = '';
    if (!$this->checkUser($this->username,$this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}
