<?php

include './includes/dbConnect.php';
session_start();

//variable assignments
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];

//replace data
$sql = "UPDATE members SET first_name = '$fname', last_name = '$lname', dob = '$dob', email = '$email'";

$update = mysqli_query($conn, $sql);
if (!$update) {
    // echo mysqli_error();
    // echo "BROKEN";
    echo $sql;
    
} else {
    echo '<script>alert("Succesfully Updated")</script>';
    header("Location: https://cgi.luddy.indiana.edu/~team21/front/front/4/profile.php");
}

?>