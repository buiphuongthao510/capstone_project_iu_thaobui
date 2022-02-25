<!DOCTYPE html>
<html>
  
<head>
    <title>Insert-Page page</title>
</head>
  
<body>
    <center>
    <?php
	// Check if form is submitted 
		if(isset($_POST['submitted'])) {

			include('./includes/dbConnect.php');

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