<?php

include './includes/dbConnect.php';
session_start();


//variable assignments
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];

$username = $_SESSION["username"];

//replace data
$sql = "UPDATE members SET first_name = '$fname', last_name = '$lname', dob = '$dob', email = '$email' WHERE username = '$username';";

$update = mysqli_query($conn, $sql);
if (!$update) {
    //echo mysqli_error();
    echo "BROKEN";
    echo $sql;

} else {
    echo '<script>alert("Succesfully Updated")</script>';
    header("Location: https://cgi.luddy.indiana.edu/~team21/index/profile.php");
}

?>