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
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$bio = $_REQUEST['bio'];
        $picProfile = $_REQUEST['picProfile']

	// Insert Query 
		$sql = "INSERT INTO organizaitons(name,email,phone,bio, picProfile) VALUES ('".$name."','".$email."','".$phone."','".$bio."','".$picProfile."')";

		if(mysqli_query($conn, $sql)){
			echo "Data updated successfully";
			echo nl2br("\n$name\n $email\n $phone\n $bio\n $picProfile");
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