<?php 

class Tweet 
{
  private string $content;
  private int $id;
  private int $userId;
  private string $timestamp;

  public function __construct($content, $userId)
  {
    $this->content = $content;
    $this->userId = $userId;
    $this->timestamp = date('Y-m-d H:i:s');
  }


  public function getContent(){
    return $this->content;
  }
  public function getId(){
    return $this->id;
  }
  public function getUserId(){
    return $this->userId;
  }
  public function getTimeStamp(){
    return $this->timestamp;
  }
  

}


?>