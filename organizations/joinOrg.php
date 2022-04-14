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

    $cas_username = $_SESSION["username"];
    $o_id = $_SESSION['o_id'];

    //select statements


    $sql_update = "UPDATE members SET o_id = $o_id WHERE username = '".$cas_username."';";
    if ($conn->query($sql_update) === TRUE) {
        echo "username: " .$cas_username. "<br>";
        echo "o_id: " .$o_id. "<br>";

      } else {
        echo "Error: " .$sql_update. "<br>".$conn->error;
      }

?>