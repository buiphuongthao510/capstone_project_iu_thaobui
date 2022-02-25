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

	// Check if form is submitted 
		if(isset($_POST['submitted'])) {
			// Set variables for vables in form field 
			// Set varibles for SQL statement 
			$event_name = $_POST['event_name'];
			$event_date = $_POST['event_date'];
			$address = $_POST['address'];
			$sql = "INSERT INTO events (event_name,event_date,address) VALUES ('".$event_name."','".$event_date."','".$address."')";

		if(!mysqli_query($conn, $sql)) {
			die('error inserting data');
		} // End of NESTED if statement
		} //End of main if statement 

		// Close Connection 
		mysqli_close($conn);

		?>
	</center>
</body>
  
</html>