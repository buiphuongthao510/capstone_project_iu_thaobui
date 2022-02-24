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

?>