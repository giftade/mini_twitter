<?php 

class Dbh 
{
  protected function connect(){
    try {
      $username = 'segun';
      $password =  '123456';
      $dbh = new PDO('mysql:host=localhost;dbname=mini_twitter',$username,$password);
      return $dbh;
    } catch (PDOException $e) {
      print "Error: " . $e->getMessage();
      die();
    }
  }
}