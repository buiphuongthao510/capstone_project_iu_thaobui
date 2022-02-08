<?php

include './includes/dbConnect.php';
session_start();

//variable assignments
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];

echo $fname;

?>