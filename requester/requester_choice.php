<?php
include 'conn.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$donate = mysqli_real_escape_string($conn, $_POST['donate']);
$appointments = mysqli_real_escape_string($conn, $_POST['appointments']);
// $history = mysqli_real_escape_string($conn, $_POST['history']);


if (isset($_POST['request'])) {
    header('location: request.php');
} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

    mysqli_close($conn);

}

if (isset($_POST['request_history'])) {
    header('location: request_history.php');
} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

    mysqli_close($conn);

}

// if (isset($_POST['history'])) {
//     header('location: history.php');
//     // echo "Upload Successful.";

// } else {
//     echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

//     mysqli_close($conn);

// }
?>