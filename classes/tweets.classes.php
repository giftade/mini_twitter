<?php
include_once "dbh.classes.php";
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

  protected function selectAllTweets(){
    $stmt = $this->connect()->prepare("SELECT * FROM tweet ORDER BY id DESC");

    if(!$stmt->execute()){
      $stmt = null;
      header('location: ../views/index.php?error=stmtfailed');
      exit();
    }
    ;
    return $stmt;
  }


}