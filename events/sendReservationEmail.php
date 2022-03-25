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
    //select statements
    $sql_select = "SELECT email FROM members WHERE username = '".$cas_username."';";
    $sql_email = mysqli_query($conn, $sql_select);
    $data = mysqli_fetch_assoc($sql_email);
    $user_email = $data['email'];

    $to = $user_email;
    $subject = 'Event Reservation Confirmation Youthon';
    $message = 'Thank you for your registration to Youthons event!';
    $send = mail($to, $subject, $message);
    if ($send == true){
        echo '<script type="text/javascript">';
        echo 'alert("Confirmation sent! Please check your email!");';
        echo '</script>';
    } else {
        echo $user_email;
        echo '<script type="text/javascript">';
        echo 'alert("Message could not be send...");';
        echo '</script>';
    }
    
}
?>