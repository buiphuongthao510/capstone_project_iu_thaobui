<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./createEvent.css" rel="stylesheet" />
    <title>Save Event</title>
  </head>

  <body>
  <header>
      <div class="logo"><a href="https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a></div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="">Donation</a>
        <a href="#"><?php include_once("../includes/search.php")?></a>
      </div>
      <div class="button-wrap">
        <div class="button login">Log in</div>
        <div class="button">Register</div>
      </div>
  </header>
	
	  <?php include './includes/header.php'; ?>
	
    <section class="nav">
      <div class="left">
        <div class="avatar">
        <div class="user-name">Username</div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/registeredEvent.php">Registered Events</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/createEvent.php">Create Event</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/editEvent.php">Edit Event</a></div>
        </div>
        <div class="nav-item">
          <div><a href = "https://cgi.luddy.indiana.edu/~team21/index/profile.php"> Back </a></div>
        </div>
		</div>
		
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
			
			      $id = $_GET["id"];
			
			//select statements
			$sql_select = "SELECT event_name,event_date,event_time,address,description FROM events WHERE id = $id";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
	<form action="updateEvent.php" method="POST">
		  <div class="right">
				<div class="title ei">Event Information</div>      
			<div class="line"> 
					<?php while ($data = mysqli_fetch_assoc($select)) {?>
				  <div class="form-item">
				<fieldset>
					  <label>Event Name: <input type="text" name="event_name" value="<?php echo $data['event_name']; ?>"/> </label>
				<!-- <input type="text" placeholder="Culture Show" /> -->
			  <br />
        <label>Event Date: <input type="text" name="event_date" value="<?php echo $data['event_date']; ?>"/> </label>
				<!-- <input type="text" placeholder="yyyy-mm-dd" /> -->
			  <br />
        <label>Event Time: <input type="text" name="event_time" value="<?php echo $data['event_time']; ?>"/> </label>
				<!-- <input type="text" placeholder="hh:mm:ss" /> -->
			  <br />
				<label>Location: <input type="text" name="address" value="<?php echo $data['address']; ?>"/> </label>
        <!-- <input type="text" placeholder="Wilkie Auditorium" /> -->
        <br />
				<label>Event Description: <br /><textarea name="description" rows="10" cols="50"><?php echo $data['description']; ?></textarea> </label>
				<?php }?>
			  </fieldset>
			  </div>
			  </div>
        <p align="right">
      <button> <? echo "<a href='updateEvent.php?id=$id'<button type='button' >Save Edit</button></a>"; ?> </button>
			
			  </div>
			</section>

			<footer>
			  <div class="link-wrap">
				<a>Resources</a>
				<a>Help desk</a>
				<a>Report</a>
				<a>Q&A</a>
			  </div>
			  <div class="f-logo">Youthon</div>
			</footer>
		  </body>
		</html>