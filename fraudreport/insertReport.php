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