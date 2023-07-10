<?php
include 'conn.php';

$id = "";
$hospital_name = "";
$name = "";
$phone = "";
$pwd = "";

// $id = mysqli_real_escape_string($conn, $_POST['id']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$weight = mysqli_real_escape_string($conn, $_POST['weight']);
$genotype = mysqli_real_escape_string($conn, $_POST['genotype']);
$bgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
$hsno = mysqli_real_escape_string($conn, $_POST['hsno']);
$streetname = mysqli_real_escape_string($conn, $_POST['streetname']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$donor_id = mysqli_real_escape_string($conn, $_POST['donor_id']);
$hos_location = mysqli_real_escape_string($conn, $_POST['hos_location']);
$apt_date = mysqli_real_escape_string($conn, $_POST['apt_date']);
$apt_time = mysqli_real_escape_string($conn, $_POST['apt_time']);
// $apt_confirmation = mysqli_real_escape_string($conn, $_POST['apt_confirmation']);


// $uid = "SELECT * FROM usertable WHERE id = "

$sql = "INSERT INTO donor_appointment (donor_id, fname, lname, email, height, phoneNumber, weight, hsno, streetname, country, city, bgroup, dob, genotype, hos_location, apt_date, apt_time) VALUES('$donor_id','$fname', '$lname','$email', '$height', '$phoneNumber', '$weight', '$hsno', '$streetname', '$country', '$city', '$bgroup', '$dob', '$genotype', '$hos_location', '$apt_date', '$apt_time')";

if (mysqli_query($conn, $sql)) {

    header('location: donor_appointments.php');
    // echo "Upload Successful.";

} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>