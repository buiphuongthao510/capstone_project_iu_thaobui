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
			
			$id = $_SESSION["id"];
			
			//variable assignments
			$event_name = $_POST['event_name'];
			$event_date = $_POST['event_date'];
			$event_time = $_POST['event_time'];
			$address = $_POST['address'];
			$description = $_POST['description'];

			$id = $_SESSION["id"];
			
			//Update new data 
			$sql = "UPDATE events SET event_name = '$event_name', event_date = '$event_date', event_time = '$event_time', address = '$address', description = '$description' WHERE id = 1 ;";
			
			$update = mysqli_query($conn, $sql);
			
			if (!$update) {
			
			//echo mysqli_error();
			echo $sql;

			} else {
				echo '<script>alert("New data successfully updated!!")</script>';
				header("Location: https://cgi.luddy.indiana.edu/~team21/events/editEvent.php");
			}
			
?>