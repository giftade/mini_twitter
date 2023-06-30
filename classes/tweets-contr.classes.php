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

  private function emptyInput(){
    
  }

}