<?php 
include 'conn.php';

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$approve = mysqli_real_escape_string($conn, $_POST['accepted']);
// $unapprove = mysqli_real_escape_string($conn, $_POST['unaccepted']);


// $sql = "UPDATE clr_students (department_due, clinic, bursary, library, sport, hostel, security, alumni) VALUES('Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared') where ";
if(isset($_POST['accepted'])){
    $sql = ("UPDATE request_records SET status = 'Approved. You may proceed to hospital with a screenshot of your profile for verification.'  WHERE id = $userid");

    if(mysqli_query($conn, $sql)){

        header('location: home.php');
        // echo "Upload Successful.";

    }else{
        echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
    }

    mysqli_close($conn);
    }
 ?>

