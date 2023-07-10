<?php
include 'conn.php';

$id = "";
$r = "";
$name = "";
$status = "";
$pwd = "";

$hospital_id = mysqli_real_escape_string($conn, $_POST['hospital_id']);
$p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
$ddate = mysqli_real_escape_string($conn, $_POST['ddate']);
$h_name = mysqli_real_escape_string($conn, $_POST['h_name']);
$bgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
// $license_validation = mysqli_real_escape_string($conn, $_POST['license_validation']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$units = mysqli_real_escape_string($conn, $_POST['units']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

$sql = "INSERT INTO request_records (hospital_id, p_name, ddate, h_name, contact, units, comment, status, bgroup) VALUES('$hospital_id','$p_name','$ddate', '$h_name','$contact',  '$units', '$comment', 'Request Pending. Please check back later', '$bgroup')";

if (mysqli_query($conn, $sql)) {
    echo "Upload Successful.";
    header('location: request_history.php');


} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>