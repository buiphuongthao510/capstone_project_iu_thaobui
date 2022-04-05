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

	// Get User Ticket
		$username = $_SESSION["username"];

	// Taking values from form data 
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$bio = $_REQUEST['bio'];
        
		

	// Insert Query 
		$sql = "INSERT INTO organizations(name,email,phone,bio) VALUES ('".$name."','".$email."','".$phone."','".$bio."')";

		if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$name\n $email\n $phone\n $bio");
		}	else{
			echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
		}

		$sql_members = "INSERT INTO members (created_organizations) VALUES ('".$name."')";
		if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$name");
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