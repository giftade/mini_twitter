<?php 

class TweetsContr extends Tweets
{
  private string $tweetContent;
  private int $userId;
  private string $username;
  private string $timestamp;

  public function __construct($tweetContent, $userId, $username, $timestamp)
  {
    $this->tweetContent = $tweetContent;
    $this->userId = $userId;
    $this->username = $username;
    $this->timestamp = $timestamp;
  }

  public function tweet(){
    if($this->emptyInput() === false){
      header('location: ../views/index.php?error=emptyInput');
      exit();
    }
    $this->setTweet($this->tweetContent, $this->userId, $this->username, $this->timestamp);
    
  }
  
  private function emptyInput(){
    $result = '';
    if(empty($this->tweetContent)){
        $result = false;
    }else{
      $result = true;
    }
    return $result;
  }

}