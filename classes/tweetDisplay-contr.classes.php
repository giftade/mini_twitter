<?php
include "../classes/tweets.classes.php";
class TweetDisplay extends Tweets
{
  public function displayTweet()
  {
    echo "<div class='mt-10 sm:mx-auto text-white sm:w-full sm:max-w-sm border-2 border-grey-500 p-5'>
    <div class='flex space-x-4'>
      <img src='images/btc.jpg' alt='Avatar' class='w-12 h-12 rounded-full'>
      <div>
        <h4 class='font-bold'>John Doe</h4>
        <p class='text-gray-600'>@johndoe</p>
      </div>
    </div>
    <div class='mt-4'>
      <p class='text-lg'>This is an example tweet using Tailwind CSS!</p>
    </div>

  </div>";
  }
}