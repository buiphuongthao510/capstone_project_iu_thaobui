<?php
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
            session_start();
			
			$cas_username = $_SESSION["username"];
			
			//variable assignments
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$bio = $_POST['bio'];
			$donation = $_POST['donation'];

			
			//Update new data 
			$sql = "UPDATE organizations SET name = '$name', email = '$email', phone = '$phone', bio = '$bio', donation = '$dontation' WHERE m_username = '".$cas_username."' ;";
			
			$update = mysqli_query($conn, $sql);
			
			if (!$update) {
			
			//echo mysqli_error();
			echo $sql;

			} else {
				echo '<script>alert("New data successfully updated!!")</script>';
				echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/organizations/editOrg.php";'
			}
			
?>