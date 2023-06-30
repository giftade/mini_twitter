<?php
session_start();

if(isset($_POST['submit'])){
  $tweetContent = $_POST['tweet'];
  $userId = $_SESSION['user_id'];
  $username = $_SESSION['username'];
  $timestamp = date('Y-m-d');
}

include "../classes/dbh.classes.php";
include "../classes/tweets.classes.php";
include "../classes/tweets-contr.classes.php";

$tweet = new TweetsContr($tweetContent, $userId, $username, $timestamp);
$tweet->tweet();
header('location: ../views/index.php?error=none');
