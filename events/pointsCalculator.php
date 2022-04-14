<?php
session_start();
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
    
    if($_POST){
        $members_amount = $_POST['members_amount'];
        $participation_amounts = $_POST['participation_amounts'];
        $result = $_POST['result'];

        if(is_numeric($members_amount) && is_numeric($participation_amounts)){
            $result = 100 + (100*($participation_amounts/$members_amount));
            echo "<p>Points for your team: " .$result."</p>";
            }
        }else{
            $error = "Enter Number first";
        }

?>