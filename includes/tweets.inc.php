<?php
session_start();


if(isset($_POST['submit'])){
  $tweetContent =
  filter_input(INPUT_POST, 'tweet', FILTER_SANITIZE_SPECIAL_CHARS);
  $userId = $_SESSION['user_id'];
  $username = $_SESSION['username'];
  $timestamp =date('d-m-Y H:i') ;
}

include "../classes/dbh.classes.php";
include "../classes/tweets.classes.php";
include "../classes/tweets-contr.classes.php";
include "../classes/tweetDisplay-contr.classes.php";

$tweet = new TweetsContr($tweetContent, $userId, $username, $timestamp);
$tweet->tweet();
header('location: ../views/index.php?error=none');
