<?php 

class User 
{
  private string $username;
  private string $password;
  private int $id;

  public function __construct(string $username, string $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

 

  public function getId(){
    return  $this->id;
  }

  public function getUsername(){
      return $this->username;
    }
  public function setPassword($password){
    $this->password = $password;
  }

 

  public static function login($username, $password){

  }

  public function signup(){
    // Define the password validation pattern
    $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';

    $username = $password = '';
    $nameErr = $passErr = $passwordInvalid =  '';
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          //username validation

          if(empty($_POST['username'])){
            $nameErr = 'Username is required';
          }else{
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
          }

          //VALIDATING PASSWORD
          if(empty($_POST['password'])){
            $passErr = 'Password is required';
          }else{
        // Check if the password matches the pattern
        if (preg_match($pattern, $_POST['password'])) {
          $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        } else {
          // Password does not meet the requirements
          $passwordInvalid = "Password is invalid" . '</br>' .
            " it must contain:" . '</br>' .
            "At least one letter (uppercase or lowercase)" . '</br>' .
            " At least one digit" . '</br>' .
            " At least one special character from the set @$!%*#?&" . '</br>' .
            " Length of at least 8 characters";
        }
      
          }
      }
  }
}

?>