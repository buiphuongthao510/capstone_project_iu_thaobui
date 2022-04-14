<?php
    session_start();
    if(!isset($_SESSION['username'])){
      echo '<script type="text/javascript">';
      echo 'alert("Unauthorized page! Please login first!");';
      echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/index/login.php";';
      echo '</script>';
    }
    else{
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
          }
?>



<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Org</title>
</head>
  
<body>
    <center>
    <?php

    //connect to Database 
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



	// Taking values from form data 
		$subject = $_REQUEST['subject'];
		$description = $_REQUEST['description'];

	//Select email
	$sql_select = "SELECT email FROM members WHERE username = '".$cas_username."';";
    $sql_email = mysqli_query($conn, $sql_select);
    $data = mysqli_fetch_assoc($sql_email);
    $user_email = $data['email'];

	//Email confirmation
	$to = $user_email;
    $email_subject = 'Report Sent Confirmation';
    $message = 'We will process your problem soon!';
    $send = mail($to, $email_subject, $message);
    if ($send == true){
        echo '<script type="text/javascript">';
        echo 'alert("Confirmation sent! Please check your email!");';
        echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/report/report.php";';
        echo '</script>';
    } else {
        echo $user_email;
        echo '<script type="text/javascript">';
        echo 'alert("Message could not be send...");';
        echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/report/report.php";';
        echo '</script>';
    }   


	// Insert Query 

	$sql = "INSERT INTO report(subject, description, username) 
	VALUES ('".$subject."','".$description."','".$cas_username."')";		
	

	if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$subject");
		}	else{
			echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
		}

	
		// Close Connection 
		mysqli_close($conn);

		?>
	</center>
</body>
  
</html>