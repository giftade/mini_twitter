<?php

class SignupContr
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
    
    if()
  }
}