<?php
include 'conn.php';
session_start();
$id = $_SESSION["id"];
?>


<!DOCTYPE html>
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
                    class="text-lg bg-red-700 py-1 px-2 rounded-md text-white hover:bg-red-500">Logout</a>
        </nav>
    </header>
    <?php
    include 'conn.php';
    $sql = "SELECT * FROM donors where id like $id ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
            ?>
            <div class="flex justify-center items-center">
                <div class="m-2">
                    <h2 class="text-2xl text-red-700 text-center">DONATE</h2>
                    <p class="mb-2 text-center text-sm">~ Set an appointment to donate ~</p>
                    <form class="w-full" style="" action="set_appointment.php" method="POST">
                        <div class="grid grid-cols-2 gap-3">
                            <input type="hidden" name="donor_id" value="<?php echo $row['id'] ?>">
                            <div class="flex  items-center">
                                <label class=""> First Name: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['fname']; ?>" name="fname">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Last Name: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['lname']; ?>" name="lname">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Email: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['email']; ?>" name="email">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Phone Number: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['phoneNumber']; ?>" name="phoneNumber">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Date of Birth: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['dob']; ?>" name="dob">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Height: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['height']; ?>cm" name="height">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Weight: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['weight']; ?>kg" name="weight">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Genotype: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['genotype']; ?>" name="genotype">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Blood Group: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['bgroup']; ?>" name="bgroup">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> House Number: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" No. <?php echo $row['hsno']; ?>" name="hsno">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Street Name: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['streetname']; ?>" name="streetname">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> City: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['city']; ?>" name="city">
                            </div>
                            <div class="flex items-center text-lg">
                                <label class=""> Country: </label>
                                <input class="font-semibold bg-red-50 text-lg" type="text" readonly
                                    value=" <?php echo $row['country']; ?>" name="country">
                            </div>

                        </div>

                        <?php
        }
    }
    ?>

                <div class="flex flex-col mt-3 space-y-2">
                    <div class="flex items-center text-lg space-x-2 py-1.5">
                        <label class=""> Hospital: </label>
                        <select name="hos_location"
                            class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2">
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM hospital";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['hospital_name']. ', ' . $row['streetname'] . ', ' . $row['city'] ?>"><?php echo $row['hospital_name']. ', ' . $row['streetname'] . ', ' . $row['city'] ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="flex items-center space-x-3 py-1.5 text-lg mt-1">
                        <label class="">Time: </label>
                        <input
                            class="font-semibold bg-slate-200 border border-red-500 rounded-lg py-1 px-2  text-sm w-full"
                            type="text" name="apt_time" placeholder="Set a time for the appointment (3:00PM)">
                    </div>
                    <div class="flex items-center space-x-3 text-lg pt-1">
                        <label class=""> Date: </label>
                        <input
                            class="font-semibold bg-slate-200 border border-red-500 rounded-lg py-1 px-2  text-sm w-full"
                            type="text" name="apt_date" placeholder="Set a date for the appointment (23-07-2023)">
                    </div>
                </div>
                <button type="submit" style=""
                    class="bg-blue-700 text-white mt-2 py-1 px-3 rounded-lg w-full hover:bg-blue-500">
                    Set Appointment
                </button>
            </form>
        </div>
    </div>


</body>

</html>