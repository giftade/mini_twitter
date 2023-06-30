<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
exit(); 
}
include "../classes/tweetDisplay-contr.classes.php";

$tweetDisplay = new TweetDisplay();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/main.css">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body class="bg-twitterBg text-black">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <?php
    echo '<div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Hey ' . $_SESSION["username"] . '</h2>
    </div>'
    ?>
    <div>
      <a href="logout.php" class="flex justify-center w-full rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="font-size: 20px; width:10%;">Log Out</a>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6 flex flex-col sm:flex-row" action="<?php echo htmlspecialchars("../includes/tweets.inc.php")  ?>" method="POST">
        <div class="flex-grow">
          <input id="tweet" name="tweet" placeholder="What do you think!?" type="text" autocomplete="tweet" required class=" block outline-none w-full  py-1.5 px-3 text-center bg-transparent placeholder-gray-400 border-b-2 border-b-gray-300 focus:border-b-indigo-600 text-white" style="font-size: 20px; background-color: rgba(255, 255, 255, 0);">
        </div>
        <div class=" flex-shrink-0">
          <button type="submit" name="submit" class="flex justify-center w-full rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tweet</button>
        </div>
      </form>
    </div>


  </div>

  <?php
  
    $tweetDisplay->displayTweet();
  
   ?>
  

</body>

</html>