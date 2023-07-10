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
        table,
        th,
        td {
            border: 1px inset black;
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

<body class="container mx-auto font-poppins bg-red-50">
    <header>
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
                    class="text-lg bg-red-700 py-1.5 px-3 rounded-md text-white hover:bg-red-500">Logout</a>
            </div>
        </nav>
    </header>

    <div class="flex justify-center items-center">
        <div class="m-2">
            <a href="home.php"><button
                    style="background-color: #de878b; color: white;  cursor: pointer; float: left; border-radius: 3px;  margin-right:-4vw; border:none"
                    class="px-3 py-2">Back</button></a>
            <h2 class="text-2xl text-red-700 text-center">Donation History</h2>
            <p class="mb-2 text-center text-sm">~ View donation history ~</p>

            <div style="margin: 0  auto" class="">
                <table class="text-left " style="width: 100%; margin: 0  auto">
                    <thead class="text-lg">
                        <tr>
                            <!-- <th class="hidden">No.</th> -->
                            <th>Name</th>
                            <th class="">Date</th>
                            <th>Status</th>
                            <th>Blood Type</th>
                            <th>Contact</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT * FROM donation_records where hospital_id like $id ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
                            ?>
                            <tbody class="mt-2" style="border-bottom: black solid 2px;">
                                <tr>
                                    <td>
                                        <?php echo $row['r_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ddate']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bgroup']; ?>
                                    </td>
                                    
                                    <td>
                                        <?php echo $row['contact']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['comment']; ?>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>



        </div>
</body>

</html>