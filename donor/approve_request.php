<?php
include 'conn.php';

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$approve = mysqli_real_escape_string($conn, $_POST['accepted']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
// $unapprove = mysqli_real_escape_string($conn, $_POST['unaccepted']);


// $sql = "UPDATE clr_students (department_due, clinic, bursary, library, sport, hostel, security, alumni) VALUES('Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared') where ";
if (isset($_POST['accepted'])) {
    $sql = ("UPDATE request_records SET status = '$status'  WHERE id = $userid");

    if (mysqli_query($conn, $sql)) {

        header('location: home.php');
        // echo "Upload Successful.";

    } else {
        echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>