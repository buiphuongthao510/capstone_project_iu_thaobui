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
    
    $sql_update = "DELETE FROM events WHERE username = '".$cas_username."';";

    if ($conn->query($sql_update) === TRUE) {
        // echo "username: " .$cas_username. "<br>";
        // echo "id: " .$id. "<br>";
        echo '<script type="text/javascript">';
        echo 'alert("You have succesfully DELETED your event!!");';
        echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/events/editEvent.php";';
        echo '</script>';
      
      } else {
        echo "Error: " .$sql_update. "<br>".$conn->error;
       
      }
}

?>