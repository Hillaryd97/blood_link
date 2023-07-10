<?php 
include 'conn.php';

$id = "";
$fname = "";
$name = "";
$phoneNumber = "";
$pwd = "";

// $id = mysqli_real_escape_string($conn, $_POST['id']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
$relwithpat = mysqli_real_escape_string($conn, $_POST['relwithpat']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$hsno = mysqli_real_escape_string($conn, $_POST['hsno']);
$streetname = mysqli_real_escape_string($conn, $_POST['streetname']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
// $uid = "SELECT * FROM usertable WHERE id = "

$sql = "INSERT INTO requesters (fname, lname, email, phoneNumber, hsno, streetname, country, city, relwithpat, title, pwd) VALUES('$fname', '$lname','$email', '$phoneNumber', '$hsno', '$streetname', '$country', '$city', '$relwithpat', '$title', '$pwd')";

if(mysqli_query($conn, $sql)){

	header('location: login.php');
    // echo "Upload Successful.";

}else{
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>

