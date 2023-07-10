<?php
include 'conn.php';
session_start();
// $id = $_POST["id"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$sql = "select * from hospital where email= '$email' && password = '$pwd'";
// $sql = "select email, pass from usertable where email like '$email' and pwd like '$pass';";
$result = mysqli_query($conn, $sql);
$rowNum = mysqli_num_rows($result);


if ($rowNum > 0) {
    $row = mysqli_fetch_assoc($result);
    $email = $row["email"];
    $id = $row['id'];
    $_SESSION['id'] = $id;
    echo $id;
    echo "Welcome: " . $id;
    header('location:home.php');
} else {
    // header('location:login.php');
    echo "ERROR: Something went wrong $sql. Wrong Password/Email!" . mysqli_error($conn);

}

?>