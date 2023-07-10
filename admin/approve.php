<?php 
include 'conn.php';

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$approve = mysqli_real_escape_string($conn, $_POST['accepted']);
// $unapprove = mysqli_real_escape_string($conn, $_POST['unaccepted']);


// $sql = "UPDATE clr_students (department_due, clinic, bursary, library, sport, hostel, security, alumni) VALUES('Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared', 'Cleared') where ";
if(isset($_POST['accepted'])){
    $sql = ("UPDATE hospital SET license_validation = 'Verified'  WHERE id = $userid");

    if(mysqli_query($conn, $sql)){

        header('location: home.php');
        // echo "Upload Successful.";

    }else{
        echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
    }

    mysqli_close($conn);
    }

    // if(isset($_POST['unapprove'])){
    //    $sql = ("UPDATE hospital SET license_validation = 'Not Approved!'  WHERE id = $userid");

    // if(mysqli_query($conn, $sql)){

    //     header('location: home.php');
    //     // echo "Upload Successful.";

    // }else{
    //     echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
    // }

    // mysqli_close($conn);

    //     }


//     if(isset($_POST['comment'])){
//             header('location: comment.php');
//             // echo "Upload Successful.";
    
//         }else{
//             echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
    
//         mysqli_close($conn);
    
//             }
// ?>

