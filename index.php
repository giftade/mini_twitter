<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css\main.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body class="bg-red-400 text-black">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <?php
    echo '<div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Hey ' . $_SESSION["username"] . '</h2>
    </div>'
    ?>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="../mini_twitter/includes/login.inc.php" method="POST">

        <div>
          <div class="mt-2">
            <input id="tweet" name="tweet" placeholder="What do you think!?" type="tweet" autocomplete="tweet" required class="block background-none outline-none w-full rounded-md border-0 py-1.5   shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
</body>

</html>