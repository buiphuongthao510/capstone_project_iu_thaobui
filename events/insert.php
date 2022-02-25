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

	// insert form data into database 
		if(isset($POST['Create']))
		{
			$event_name = $_POST['event_name'];
			$event_name = $_POST['event_date'];
			$event_name = $_POST['address'];
			$sql = "INSERT INTO events(event_name,event_date,address) 
			VALUES ('".$event_name."','".$event_date."','".$address."')";
			if (mysqli_query($conn, $sql)) {
				echo "Insert DATABASE successfully!";
			}	else {
				echo "Error: " . $sql . ":-" . mysqli_error($conn);
			}
		// Close Connection 
			mysqli_close($conn);
		}

		

		?>
	</center>
</body>
  
</html>