<?php 

class LoginContr extends Login
{
  private string $username;
  private string $password;

  public function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

  //login user
  public function loginUser() {
    if($this->emptyInput() == false){
      header('location: ../login.php?error=emptyInput');
      exit();
    }

    $this->getUser($this->username, $this->password);
  }

//check if input is empty
  private function emptyInput(){
    $result = '';
    if(empty($this->username) || empty($this->password)){
      $result = false;
    }else{
      $result = true;
    }
    return $result;
  }




}