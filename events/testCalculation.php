<?php
session_start();
if(!isset($_SESSION['username'])){
    echo '<script type="text/javascript">';
    echo 'alert("You need to login in order to register for the event.");';
    echo '</script>';
} else {
    // CONNECT DATABASE
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

    if(isset($GET['submit'])){
    $a = $_GET['test1'];
    $b = $_GET['test2'];
    $c = $_GET['test1']/$_GET['test2']
    $d = $c * 100
    $e = $d + 100
    echo "Result: ", $e;
    }
?>