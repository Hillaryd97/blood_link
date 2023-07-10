<?php
include 'conn.php';

$id = "";
$r = "";
$name = "";
$status = "";
$pwd = "";

$hospital_id = mysqli_real_escape_string($conn, $_POST['hospital_id']);
$r_name = mysqli_real_escape_string($conn, $_POST['r_name']);
$ddate = mysqli_real_escape_string($conn, $_POST['ddate']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$bgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
// $license_validation = mysqli_real_escape_string($conn, $_POST['license_validation']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$weight = mysqli_real_escape_string($conn, $_POST['weight']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
// $uid = "SELECT * FROM usertable WHERE id = "

$sql = "INSERT INTO donation_records (hospital_id, r_name, ddate, status, contact, weight, comment, height, bgroup) VALUES('$hospital_id','$r_name','$ddate', '$status','$contact',  '$weight', '$comment', '$height', '$bgroup')";

if (mysqli_query($conn, $sql)) {

    header('location: history.php');
    // echo "Upload Successful.";

} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>