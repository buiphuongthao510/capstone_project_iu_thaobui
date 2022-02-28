<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./createEvent.css" rel="stylesheet" />
    <title>Document</title>
  </head>

  <body>
    <header>
      <div class="logo">Youthon</div>
      <div class="menu-list">
        <a href="">Events</a>
        <a href="">Organizations</a>
        <a href="">Donation</a>
        <a href="">Search</a>
      </div>
    </header>
	
	  <?php include './includes/header.php'; ?>
	
    <section class="nav">
      <div class="left">
        <div class="avatar">
          <img src="./img/banner2.png" alt="" />
          <div class="user-name">User name</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Overview</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Dashboard</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Create Event</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Settings</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Help</div>
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
			
			      $id = $_SESSION["id"];
			
			//select statements
			$sql_select = "SELECT event_name,event_date,event_time,address FROM events WHERE id = 1 ;";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
		
  <div class="right">
		<div class="title ei">Event Information</div>      
    <div class="line"> 
			<?php while ($data = mysqli_fetch_assoc($select)) {?>
		  <div class="form-item">
        <fieldset>
			  <label><b>Event Name:</b> <?php echo $data['event_name']; ?> </label>
        <!-- <input type="text" placeholder="Culture Show" /> -->
      <br />
			  <label><b>Event Date:</b> <?php echo $data['event_date']; ?></label>
        <!-- <input type="text" placeholder="yyyy-mm-dd" /> -->
      <br />
			  <label><b>Event Time:</b> <?php echo $data['event_time']; ?> </label>
        <!-- <input type="text" placeholder="hh:mm:ss" /> -->
      <br />
			  <label><b>Location:</b> <?php echo $data['address']; ?> </label>
        <?php }?>
      </fieldset>
        <!-- <input type="text" placeholder="Wilkie Auditorium" /> -->
      </div>
      </div>

			  <a href="eventEdit.php"><button>Edit Event Information</button></a>
      </div>
    </section>

    <footer>
      <div class="link-wrap">
        <a>Resource</a>
        <a>Help deak</a>
        <a>Report</a>
        <a>Q&A</a>
      </div>
      <div class="f-logo">Youthon</div>
    </footer>
  </body>
</html>