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
                <a href="signout.php"
                    class="text-lg bg-red-700 py-1.5 px-3 rounded-md text-white hover:bg-red-500">Logout</a>
            </div>
        </nav>
    </header>
    <div class="flex justify-center items-center">
        <div class="m-2">
            <button onclick="history.back()"
                style="background-color: #de878b; color: white;  cursor: pointer; float: left; border-radius: 3px;  margin-right:-4vw; border:none"
                class="px-3 py-2">Back</button>
            <h2 class="text-2xl text-red-700 text-center">Request Donations</h2>
            <p class="mb-2 text-center text-sm">~ Enter details for donations from donors and hospitals ~</p>
           
                    <form class="w-full mt-3" style="" action="request_val.php" method="POST">
                        <div class="grid grid-cols-2 gap-6">
                        <?php
            include 'conn.php';
            $sql = "SELECT * FROM hospital where id like $id ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
                    ?>
                            <input type="hidden" name="hospital_id" value="<?php echo $row['id'] ?>" />
                            
                    <?php
                }
            }
            ?>
                            <div>
                                <div>
                                    <label>Choose a Donor</label>
                                    <select name="p_name"
                            class="bg-slate-200 border text-black border-red-500 rounded-lg w-full py-0.5 px-2">
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM donors";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option class="text-black" value="<?php echo $row['id']. ' ' . $row['fname']. ' ' . $row['lname'] . ', ' . $row['bgroup']. ', ' . $row['city'] ?>"><?php echo $row['fname']. ', ' . $row['lname'] . ', ' . $row['bgroup']. ', ' . $row['city'] ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                                </div>
                                <!-- <div>
                                    <label class="">Patient Name</label>
                                    <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                                        placeholder="Enter Patient name" name="p_name" />
                                      
                                </div> -->
                                <div>
                                    <label class="">Hospital Name & Location</label>
                                    <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                                        placeholder="Enter Hospital name and location" name="h_name" />
                                </div>
                                <div>
                                    <label class=""> Blood Type</label>
                                    <select name="bgroup"
                                        class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2">
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                <div>
                                    <div>
                                        <label class="">Required Units</label>
                                        <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2"
                                            type="text" placeholder="Required Units" name="units" />
                                    </div>
                                    <div>
                                        <label class=""> Date Needed</label>
                                        <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2"
                                            type="text" placeholder="eg: 2023-07-29" name="ddate" />
                                    </div>

                                    <label class=""> Contact Information</label>
                                    <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                                        placeholder="Enter contact information. (email or phone)" name="contact" />
                                </div>
                            </div>
                            <div>
                                <label class=""> Additional Instructions</label>
                                <input class="bg-slate-200 border border-red-500 rounded-lg w-full py-0.5 px-2" type="text"
                                    style="height: 3em" placeholder="Enter other information " name="comment" />
                            </div>
                        </div>
                        <div class="text-center flex flex-col justify-center items-center">
                            <button type="submit" class="bg-red-700 text-white mt-2 py-1 w-3/6 rounded-lg hover:bg-red-500">
                                Submit</button>
                        </div>
                    </form>

        </div>
    </div>
</body>

</html>