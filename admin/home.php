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
        .admin {
            font-size: 2em;
        }

        .bg-blue-700 {
            background-color: rgb(59 130 246);
        }

        .bg-blue-500 {
            background-color: rgb(147 197 253);
        }

        .inner {
            padding: 1em;
            text-align: center;
        }

        .inner h3 {
            font-weight: 700;
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
                <a href="signout.php"
                    class="text-lg bg-red-700 py-1 px-2 rounded-md text-white hover:bg-red-500">Logout</a>
            </div>
        </nav>
    </header>
    <div class="">
        <h1 class="admin text-center font-bold">ADMIN HOME</h1>
        <div class="flex justify-evenly">
            <div class="bg-red-700 text-white inner">
                <p>TOTAL NO. OF DONORS</p>
                <?php
                $sql = "SELECT * FROM donors";
                $query = $conn->query($sql);

                echo "<h3>" . $query->num_rows . "</h3>";
                ?>
            </div>

            <div class="bg-blue-700 text-white inner">
                <p>TOTAL NO. OF HOSPITALS</p>
                <?php
                $sql = "SELECT * FROM hospital";
                $query = $conn->query($sql);

                echo "<h3>" . $query->num_rows . "</h3>";
                ?>
            </div>
            <div class="bg-red-700 text-white inner">
                <p>TOTAL NO. OF REQUESTERS</p>
                <?php
                $sql = "SELECT * FROM requesters";
                $query = $conn->query($sql);

                echo "<h3>" . $query->num_rows . "</h3>";
                ?>
            </div>
            <div class="bg-blue-700 text-white inner">
                <p>TOTAL NO. OF REQUESTS</p>
                <?php
                $sql = "SELECT * FROM request_records";
                $query = $conn->query($sql);

                echo "<h3>" . $query->num_rows . "</h3>";
                ?>
            </div>
        </div><br>
        <h1 class="text-lg text-center m-3 font-bold">Licenses to be approved</h1>
        <table class="text-left table-auto " style="width: 100%; margin: 0  auto">

            <thead style="border: black solid 2px;">
                <tr>
                    <th class="hidden">No</th>
                    <th>Hospital Name</th>
                    <th>Street Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <!-- <th>Email</th> -->
                    <!-- <th>Phone Number</th> -->
                    <th>License Number</th>
                    <th>License Validation</th>
                    <th width="%" style="text-align:center;">Action</th>
                </tr>
            </thead>


            <tbody>
                <?php
                include 'conn.php';
                $sql = "SELECT * FROM hospital where license_validation = 'Awaiting Approval'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
                        ?>
                    <tbody class="mt-2" style="border: black solid 2px;">
                        <tr>
                            <td class="hidden">
                                <?php
                                echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['hospital_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['streetname']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>


                            <td>
                                <?php echo $row['license_number'] ?>
                            </td>
                            <td>
                                <?php echo $row['license_validation'] ?>
                            </td>
                            <td class="center" style="text-align:center;">
                                <form action="approve.php" method="POST">
                                    <input type="hidden" name="userid" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="accepted"
                                        class="bg-blue-700 text-white w-36 py-1 px-2 rounded-lg hover:bg-blue-500 duration-300">Approve</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                <?php }
                } ?>
            </tbody>
        </table>
        <br>
        <h1 class="text-lg text-center m-3 font-bold">Approved Licenses</h1>
        <table class="text-left table-auto " style="width: 100%; margin: 0  auto">

            <thead style="border: black solid 2px;">
                <tr>
                    <th class="hidden">No</th>
                    <th>Hospital Name</th>
                    <th>Street Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <!-- <th>Email</th> -->
                    <!-- <th>Phone Number</th> -->
                    <th>License Number</th>
                    <th>License Validation</th>
                    <!-- <th width="%" style="text-align:center;">Action</th> -->
                </tr>
            </thead>


            <tbody>
                <?php
                include 'conn.php';
                $sql = "SELECT * FROM hospital where license_validation = 'Verified'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
                        ?>
                    <tbody class="mt-2" style="border: black solid 2px;">
                        <tr>
                            <td class="hidden">
                                <?php
                                echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['hospital_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['streetname']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>


                            <td>
                                <?php echo $row['license_number'] ?>
                            </td>
                            <td>
                                <?php echo $row['license_validation'] ?>
                            </td>
                            <!-- <td class="center" style="text-align:center;">
                                <form action="approve.php" method="POST">
                                    <input type="hidden" name="userid" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="accepted"
                                        class="bg-blue-700 text-white w-36 py-1 px-2 rounded-lg hover:bg-blue-500 duration-300">Approve</button>
                                </form>
                            </td> -->
                        </tr>
                    </tbody>
                <?php }
                } ?>
            </tbody>
        </table>
    <br>
    <h1 class="text-lg text-center m-3 font-bold">Pending Requests</h1>
        <table class="text-left table-auto " style="width: 100%; margin: 0  auto">

            <thead style="border: black solid 2px;">
                <tr>
                    <th class="hidden">No</th>
                    <th>Donor Name</th>
                    <th>Hospital Name</th>
                    <th>Blood Group</th>
                    <th>Units</th>
                    <!-- <th>Email</th> -->
                    <!-- <th>Phone Number</th> -->
                    <!-- <th>Comment</th> -->
                    <th>Status</th>
                    <th width="%" style="text-align:center;">Action</th>
                </tr>
            </thead>


            <tbody>
                <?php
                include 'conn.php';
                $sql = "SELECT * FROM request_records where status = 'Request Pending. Please check back later'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
                        ?>
                    <tbody class="mt-2" style="border: black solid 2px;">
                        <tr>
                            <td class="hidden">
                                <?php
                                echo $row['hospital_id'] ?>
                            </td>
                            <td>
                                <?php echo $row['p_name']; ?>
                            </td>
                            <td style="width: 20%;">
                                <?php echo $row['h_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['bgroup']; ?>
                            </td>
                            <td>
                                <?php echo $row['units']; ?>
                            </td>
                            <td style="width: 20%;">
                                <?php echo $row['status'] ?>
                            </td>
                            <td class="center" style="text-align:center;">
                                <form action="approve_request.php" method="POST">
                                    <input type="hidden" name="userid" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="accepted"
                                        class="bg-blue-700 text-white w-36 py-1 px-2 rounded-lg hover:bg-blue-500 duration-300">Approve</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                <?php }
                } ?>
            </tbody>
        </table>
    <br>
    <h1 class="text-lg text-center m-3 font-bold">Approved Requests</h1>
        <table class="text-left table-auto " style="width: 100%; margin: 0  auto">

            <thead style="border: black solid 2px;">
                <tr>
                    <th class="hidden">No</th>
                    <th>Patient Name</th>
                    <th>Hospital Name</th>
                    <th>Blood Group</th>
                    <th>Units</th>
                    <!-- <th>Email</th> -->
                    <!-- <th>Phone Number</th> -->
                    <!-- <th>Comment</th> -->
                    <th>Status</th>
                    <!-- <th width="%" style="text-align:center;">Action</th> -->
                </tr>
            </thead>


            <tbody>
                <?php
                include 'conn.php';
                $sql = "SELECT * FROM request_records where status = 'Approved. You may proceed to hospital with a screenshot of your profile for verification.'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
                        ?>
                    <tbody class="mt-2" style="border: black solid 2px;">
                        <tr>
                            <td class="hidden">
                                <?php
                                echo $row['hospital_id'] ?>
                            </td>
                            <td>
                                <?php echo $row['p_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['h_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['bgroup']; ?>
                            </td>
                            <td>
                                <?php echo $row['units']; ?>
                            </td>
                            <td style="width: 20%;">
                                <?php echo $row['status'] ?>
                            </td>
                            <!--  -->
                        </tr>
                    </tbody>
                <?php }
                } ?>
            </tbody>
        </table>
    
    </div>
</body>

</html>