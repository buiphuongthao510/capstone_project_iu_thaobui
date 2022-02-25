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
		if (isset($_POST['submit'])){
		
	// Check if all input fields are empty 
		if (!empty($_POST['event_name']) && !empty($_POST['event_date']) && !empty($_POST['address'])){

		// Fetch values from form data 
			$event_name = $_REQUEST['event_name'];
			$event_date = $_REQUEST['event_date'];
			$address = $_REQUEST['address'];

			// Insert Query 
		$sql = "INSERT INTO events(event_name,event_date,address) VALUES ('".$event_name."','".$event_date."','".$address."')";

		$run_query = mysqli_query($conn,$sql) or die(mysqli_error());

		// Check condition

		if ($run_query){
			echo "Form data successfully inserted into database!";
		}
		else {
			echo "Form data NOT submitted";
		}
		}
		else{
			echo "All fields required!";
		}

		}

		// Close Connection 
		mysqli_close($conn);

		?>
	</center>
</body>
  
</html>