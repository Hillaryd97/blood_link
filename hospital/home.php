<?php
include 'conn.php';
session_start();
$id = $_SESSION["id"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign In</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/main.css" />
  <style>
    .bg-blue-700 {
      background-color: rgb(59 130 246);
    }

    .bg-blue-500 {
      background-color: rgb(147 197 253);
    }
  </style>
</head>

<body class="container mx-auto font-poppins bg-red-50">
  <header class="mb-4">
    <nav class="flex justify-between items-center py-4 px-6 mt-2 bg-white rounded-r-full rounded-l-full shadow-lg">
      <div>
        <h1 class="text-2xl font-bold text-red-700 tracking-tighter">
          BloodLink
        </h1>
      </div>
      <div class="flex space-x-3 items-center">
        <a href="home.php" class="text-lg hover:text-red-700">Home</a>
        <!-- <a href="#about" class="text-lg hover:text-red-700">About Us</a> -->
        <a href="signout.php" class="text-lg bg-red-700 py-1 px-2 rounded-md text-white hover:bg-red-500">Logout</a>
      </div>
    </nav>
  </header>
  <form action="../search.php" method="POST" class="flex pt-4 justify-center">
    <input name="search" type="text" placeholder="Search Donors (Blood Type or Location)"
      class="shadow-md px-3 rounded-l-full w-4/6">
    <button type="submit" class="bg-blue-700 hover:bg-red-500 text-white py-1.5 px-3 rounded-r-full">Search</button>
  </form>
  <?php
  include 'conn.php';
  $sql = "SELECT * FROM hospital where id like $id ";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
      ?>
      <div class="grid grid-cols-2 mt-6 " style="margin-top: 4em;">
        <div class="flex flex-col space-y-2.5">
          <h2 class="text-2xl font-bold mb-2">Details</h2>
          <div class="flex text-lg items-center">
            <label class=""> Hospital Name: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly
              value=" <?php echo $row['hospital_name']; ?>" name="hospital_name">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> Email: </label>
            <input class="font-semibold bg-red-50 w-full text-lg" type="text" readonly value=" <?php echo $row['email']; ?>"
              name="email">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> Phone Number: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly value=" <?php echo $row['phone']; ?>"
              name="phone">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> House Number: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly value=" No. <?php echo $row['hsno']; ?>"
              name="hsno">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> Street Name: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly value=" <?php echo $row['streetname']; ?>"
              name="streetname">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> City: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly value=" <?php echo $row['city']; ?>"
              name="city">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> Country: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly value=" <?php echo $row['country']; ?>"
              name="country">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> License Number: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly
              value=" <?php echo $row['license_number']; ?>" name="license_number">
          </div>
          <div class="flex items-center text-lg">
            <label class=""> License Verification: </label>
            <input class="font-semibold bg-red-50 text-lg" type="text" readonly
              value=" <?php echo $row['license_validation']; ?>" name="validation">
          </div>

        </div>
        <form action="hospital_choice.php" method="POST" class=" grid grid-cols-2 space-x-2 items-center justify-center">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <button type="submit" name="request"
            class="bg-blue-700 text-white py-3 px-3 rounded-lg hover:bg-red-500 duration-300 text-lg">Request Donation
            <br><span class="text-sm">Request for blood donations</span></button>
            <button type="submit" name="history"
            class="bg-blue-700 text-white py-3 px-3 rounded-lg hover:bg-red-500 duration-300 text-lg">Donation History
            <br><span class="text-sm">View donation history</span></button>
          <button type="submit" name="record_donor"
            class="bg-blue-700 text-white w-36 py-3 px-3 rounded-lg hover:bg-red-500 duration-300 text-lg">Record Donations
            <br><span class="text-sm">Record donor data</span></button>
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <button type="submit" name="request_history"
            class="bg-blue-700 text-white py-3 px-3 rounded-lg hover:bg-red-500 duration-300 text-lg">Request History
            <br><span class="text-sm">View request history</span></button>
        </form>
      </div>

      <?php
    }
  }
  ?>



</body>

</html>