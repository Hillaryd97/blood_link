<?php
include 'conn.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$request = mysqli_real_escape_string($conn, $_POST['request']);
$record_donor = mysqli_real_escape_string($conn, $_POST['record_donor']);
$history = mysqli_real_escape_string($conn, $_POST['history']);
$request_history = mysqli_real_escape_string($conn, $_POST['request_history']);


if (isset($_POST['request'])) {
    header('location: request.php');
} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

    mysqli_close($conn);

}

if (isset($_POST['record_donor'])) {
    header('location: record_donor.php');
} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

    mysqli_close($conn);

}

if (isset($_POST['history'])) {
    header('location: history.php');
    // echo "Upload Successful.";

} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

    mysqli_close($conn);

}

if (isset($_POST['request_history'])) {
    header('location: request_history.php');
    // echo "Upload Successful.";

} else {
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

    mysqli_close($conn);

}
?>