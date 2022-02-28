<?php

$servername = "db.luddy.indiana.edu";
$username = "i494f21_team21";
$password = "my+sql=i494f21_team21";
$dbname = "i494f21_team21";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
session_start();

$username = $_SESSION["username"];


//variable assignments
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];

$username = $_SESSION["username"];

//replace data
$sql = "UPDATE members SET first_name = '$fname', last_name = '$lname', dob = '$dob', email = '$email' WHERE username = 'ldeeley7';";

$update = mysqli_query($conn, $sql);
if (!$update) {
    //echo mysqli_error();
    echo $sql;

} else {
    echo '<script>alert("Succesfully Updated")</script>';
    header("Location: https://cgi.luddy.indiana.edu/~team21/index/profile.php");
}

?>