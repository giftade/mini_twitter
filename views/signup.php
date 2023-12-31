<?php
include_once "../includes/signup.inc.php";

  
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/main.css">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
</head>

<body class="bg-twitterBg text-black">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <!-- <img class="mx-auto h-10 w-auto" alt="Your Company"> -->
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Create an account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="../includes/signup.inc.php" method="POST">

        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-white">Username</label>
          <div class="mt-2">
            <input id="username" value="<?php echo isset($username) ? $username : ''; ?>" name="username" type="text" autocomplete="username" required class="block outline-none w-full rounded-md border-0 py-1.5   shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-white">Email</label>
          <div class="mt-2">
            <input id="email" value="<?php echo isset($email) ? $email : ''; ?>" name="email" type="email" autocomplete="email" required class="block  outline-none w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>

          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" required class="block outline-none w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <p class='text-red-500'><?php echo $error; ?></p>
        <div>
          <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-white">
        Have an Account?
        <a href="login.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign In</a>
      </p>
    </div>
</div>

</body>

</html>