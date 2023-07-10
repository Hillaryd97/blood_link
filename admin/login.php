<?php
session_start();
include 'conn.php';
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body class="container mx-auto font-poppins " style="background-color: rgb(219 234 254) ;">
  <header>
    <nav class="flex justify-between items-center py-4 px-6 mt-2 bg-white rounded-r-full rounded-l-full shadow-lg">
      <div>
        <h1 class="text-2xl font-bold text-red-700 tracking-tighter">
          BloodLink
        </h1>
      </div>
      <div class="flex space-x-3 items-center">
        <a href="index.html" class="text-lg hover:text-red-700">Home</a>
        <a href="#about" class="text-lg hover:text-red-700">About Us</a>
        <a href="../donor/login.php" class="text-lg bg-red-700 py-1.5 px-3 rounded-md text-white hover:bg-red-500">User
          Login</a>
      </div>
    </nav>
  </header>
  <div class="flex justify-center items-center">
    <div class="m-20 border-red-100 shadow-lg w-2/6 border p-6 rounded-lg">
      <h2 class="text-2xl text-red-700 text-center">Sign Up</h2>
      <p class="mb-2 text-center text-sm">~ Welcome Back! ~</p>
      <form class="w-full" action="validation.php" method="POST">
        <div>
          <label class="">Username</label>
          <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
            placeholder="Username" name="userName" />
        </div>
        <div>
          <label class=""> Password</label>
          <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
            placeholder="Enter your password" name="pwd" />
        </div>
        <div class="text-center flex flex-col justify-center items-center">
          <button type="submit" style="" class="bg-red-700 text-white mt-2 py-1 rounded-lg w-2/6 hover:bg-red-500">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>