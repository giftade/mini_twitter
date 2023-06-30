<?php 

class Tweets extends Dbh
{
  protected function setTweet($tweetContent,$userId,$username,$timestamp){
    $stmt = $this->connect()->prepare("INSERT INTO tweet (content, user_id, name,  timestamp) VALUES(?,?,?,?)");

    if(!$stmt->execute(array($tweetContent,$userId,$username,$timestamp))){
      $stmt = null;
      header('location: ../views/index.php?error=stmtfailed');
      exit();
    }
  }



}