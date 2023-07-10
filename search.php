<?php
include './donor/conn.php';
$search = $_POST['search'];
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="css/main.css" />

  <head>
    <style>
      table,
      th,
      td {
        border: 1px inset white;
        border-collapse: collapse;
        /* font-size: 20px; */
        padding: 1em;
      }

      th,
      td {
        background-color: rgb(219 234 254);
      }
    </style>
  </head>

<body class="mx-auto">

  <header class="container mx-auto mb-4">
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

  <h2 class="text-lg font-bold" style="text-align: center">Search Results for:
    <?php echo $_POST['search']; ?>
  </h2>
  <div class="px-3">
    <button onclick="history.back()"
      style="background-color: #de878b; color: white;  cursor: pointer; float: left; border-radius: 3px; padding: 10px; margin-right:-4vw; width: 4vw; border:none">Back</button><br><br><br><br>
    <div class="grid gap-3">
      <table class="table text-sm" style="width: ">
        <thead>
          <tr>
            <!-- <th>No.</th> -->
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date Of Birth</th>
            <th>Blood Group</th>
            <th>Genotype</th>
            <th>Country</th>
            <th>City</th>
            <th>Street Name</th>
            <th>Height</th>
            <th>Weight</th>
          </tr>
        </thead>
        <?php
        $sql = "(SELECT * FROM donors WHERE fname LIKE '%$search%' OR lname LIKE '%$search%' OR dob LIKE '%$search%' OR bgroup LIKE '%$search%' OR genotype LIKE '%$search%' OR country LIKE '%$search%' OR city LIKE '%$search%' OR height LIKE '%$search%' OR streetname LIKE '%$search%' OR weight LIKE '%$search%' OR email LIKE '%$search%')";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
        </div>
      </div>
      <tbody>
        <?php
        echo "<tr>";
        // echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phoneNumber'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['bgroup'] . "</td>";
        echo "<td>" . $row['genotype'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['streetname'] . "</td>";
        echo "<td>" . $row['height'] . "CM</td>";
        echo "<td>" . $row['weight'] . "KG</td>";
        echo "</tr";
        ?>
      </tbody>
      </div>
      <?php
          }
        }
        ?>
  </div>
  </div>
</body>

</html>