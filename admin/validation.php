<?php
include 'conn.php';
session_start();
// $userid = $_POST["userid"];
$name = $_POST["userName"];
$pass = $_POST["pwd"];
$sql = "select * from admin where userName= '$name' && password = '$pass'";
// $sql = "select name, pass from usertable where name like '$name' and password like '$pass';";
$result = mysqli_query($conn,$sql);
$rowNum = mysqli_num_rows($result);


if($rowNum > 0){
    $row = mysqli_fetch_assoc($result);
    // $name = $row["userName"];
    // $id = $row['id'];
    // $_SESSION['id'] = $id;
    // echo $user_id;
    // echo "Welcome: ". $id ;
    header('location:home.php');
}
else{
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);

}
// if($rowNum == 1){
    
//     $_SESSION['userName'] = $name;
//     header('location:home.php');
    
// }
// else{
//     header('location:login.php');
// }


?>