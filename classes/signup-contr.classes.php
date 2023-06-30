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
  //Runs all the methods for an error, if there's none, it signs up the user
  public function signupUser(){
    if($this->emptyInput() == false){
      header('location: ../views/signup.php?error=emptyInput');
      exit();
    }

    if ($this->invalidUsername() == false) {
      header('location: ../views/signup.php?error=invalidUsername');
      exit();
    }

    if ($this->invalidPassword() == false) {
      header('location: ../views/signup.php?error=invalidPass');
      exit();
    }

    if ($this->invalidEmail() == false) {
      header('location: ../views/signup.php?error=invalidEmail');
      exit();
    }

    if ($this->userTaken() == false) {
      header('location: ../views/signup.php?error=userTaken');
      exit();
    }

    $this->setUser($this->username, $this->email, $this->password);
  }
  //checks for empty input
  private function emptyInput(){
    $result = '';
    if(empty($this->username) || empty($this->email) || empty($this->password)){
        $result = false;
    }else{
      $result = true;
    }
    return $result;
  }
   //username validation
  private function invalidUsername(){
    $result = "";
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
      $result = false;
    }else{
      $result = true;
    }
    return $result;
  }
  //Email validation
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

  //password validation
  private function invalidPassword(){
    $pattern = '/^[a-zA-Z0-9]*$/';
    $result = '';
    if (!preg_match($pattern, $this->password)) {
      $result = false;
  }else{
    $result = true;
  }
  return $result;
}
  //checks if username or email already exists
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
