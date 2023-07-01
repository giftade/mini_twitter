<?php
include_once "tweets.classes.php";
class TweetDisplay extends Tweets
{
  public function displayTweet()
  {
    $stmt  = $this->selectAllTweets();
  
    
    if (!empty($stmt)) {
      
    foreach ($stmt as $tweet) {
        
        echo "<div class='mt-10 sm:mx-auto text-white sm:w-full sm:max-w-sm border-2 border-gray-500 p-5'>
    <div class='flex space-x-4'>
      <img src='images/btc.jpg' alt='Avatar' class='w-12 h-12 rounded-full'>
      <div>
        <h4 class='font-bold'>" .$tweet['name']. "</h4>
        <p class='text-gray-600'>@" . $tweet['name'] . "</p>
      </div>
    </div>
    <div class='mt-4'>
      <p class='text-xl font-bold'>" . $tweet['content'] . "</p>
    </div>
      <p class='text-gray-600'>" . $tweet['timestamp'] . "</p>
  </div>";


      }

   
  }else {
    echo "";
  }
}

}
