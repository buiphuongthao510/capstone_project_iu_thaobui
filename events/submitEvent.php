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
		$address = $_REQUEST['address'];

	//AUTO_INCREMENT o_id
		$sql = "ALTER TABLE events MODIFY o_id int NOT NULL AUTO_INCREMENT";
	// Insert Query 
		$sql = "INSERT INTO events(event_name,event_date,address) VALUES ('".$event_name."','".$event_date."','".$address."')";

		if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$event_name\n $event_date\n $address");
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