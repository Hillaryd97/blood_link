<?php
include 'conn.php';

$id = "";
$hospital_name = "";
$name = "";
$phone = "";
$pwd = "";

// $id = mysqli_real_escape_string($conn, $_POST['id']);
$hospital_name = mysqli_real_escape_string($conn, $_POST['hospital_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$license_number = mysqli_real_escape_string($conn, $_POST['license_number']);
// $license_validation = mysqli_real_escape_string($conn, $_POST['license_validation']);
$hsno = mysqli_real_escape_string($conn, $_POST['hsno']);
$streetname = mysqli_real_escape_string($conn, $_POST['streetname']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
// $uid = "SELECT * FROM usertable WHERE id = "

$sql = "INSERT INTO hospital (hospital_name, email, license_validation, phone, hsno, streetname, country, city, license_number, password) VALUES('$hospital_name','$email', 'Awaiting Approval', '$phone','$hsno',  '$streetname', '$country', '$city', '$license_number', '$pwd')";

if (mysqli_query($conn, $sql)) {

    header('location: login.php');
    // echo "Upload Successful.";

} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>