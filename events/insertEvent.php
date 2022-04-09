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
    <title>Insert-Page page</title>
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
		$event_name = $_REQUEST['event_name'];
		$event_date = $_REQUEST['event_date'];
		$event_time = $_REQUEST['event_time'];
		$address = $_REQUEST['address'];
		$description = $_REQUEST['description'];
		$image = $_FILES["image"];

		$path = $image['name'];

		$path = "C:/Users/13175/ykien/team-21/events/img" . $path;
		move_uploaded_file($image['tmp-name'], $path);
		
	// Insert Query 
		$sql = "INSERT INTO events(event_name,event_date,event_time,address,description,image, username) VALUES ('".$event_name."','".$event_date."','".$event_time."','".$address."','".$description."','".$path."','".$cas_username."')";

		if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$event_name\n $event_date\n $event_time\n $address\n $description\n $image" );
			echo '<script type="text/javascript">';
			echo 'alert("You have succesfully CREATED your event!! Please look at the Edit Event icon to edit your event information!!");';
			echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/events/createEvent.php";';
			echo '</script>';
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