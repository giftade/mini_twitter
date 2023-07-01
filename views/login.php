<?php
include_once "../includes/login.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/main.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
</head>

<body class="bg-twitterBg text-black">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <!-- <img class="mx-auto h-10 w-auto" alt="Your Company"> -->
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Log Into Account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="../includes/login.inc.php" method="POST">

        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-white">Username or Email</label>
          <div class="mt-2">
            <input id="username" value="<?php echo isset($username) ? $username : ''; ?>" name="username" type="username" autocomplete="username" required class="block outline-none w-full rounded-md border-0 py-1.5   shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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

        <div class="text-sm">
          <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
        </div>


        <div>
          <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-white">
        Don't Have an Account?
        <a href="signup.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</a>
      </p>
    </div>
  </div>
</body>

</html>