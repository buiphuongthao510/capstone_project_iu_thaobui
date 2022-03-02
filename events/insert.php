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

	// Insert Query 
		$sql = "INSERT INTO events(event_name,event_date,event_time,address) VALUES ('".$event_name."','".$event_date."','".$event_time."','".$address."')";

		if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$event_name\n $event_date\n $event_time\n $address");
		}	else{
			echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
		}
		header("Location: https://cgi.luddy.indiana.edu/~team21/events/events.php")
		// Close Connection 
		mysqli_close($conn);

		?>
	</center>
</body>
  
</html>