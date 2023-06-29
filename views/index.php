<?php

session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}


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
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6 flex flex-col sm:flex-row" action="../mini_twitter/includes/login.inc.php" method="POST">
        <div class="flex-grow">
          <input id="tweet" name="tweet" placeholder="What do you think!?" type="text" autocomplete="tweet" required class=" block outline-none w-full  py-1.5 px-3 text-center bg-transparent placeholder-gray-400 border-b-2 border-b-gray-300 focus:border-b-indigo-600 text-white" style="font-size: 20px; background-color: rgba(255, 255, 255, 0);">
        </div>
        <div class=" flex-shrink-0">
          <button type="submit" name="submit" class="flex justify-center w-full rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tweet</button>
        </div>
      </form>
    </div>


  </div>
  <div class="mt-10 sm:mx-auto text-white sm:w-full sm:max-w-sm border-2 border-grey-500 p-5">
    <div class="flex space-x-4">
      <img src="btc.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
      <div>
        <h4 class="font-bold">John Doe</h4>
        <p class="text-gray-600">@johndoe</p>
      </div>
    </div>
    <div class="mt-4">
      <p class="text-lg">This is an example tweet using Tailwind CSS!</p>
    </div>

  </div>

</body>

</html>