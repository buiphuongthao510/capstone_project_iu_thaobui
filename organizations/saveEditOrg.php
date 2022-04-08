<?php
    session_start();
    if(!isset($_SESSION['username'])){
      echo '<script type="text/javascript">';
      echo 'alert("Unauthorized page! Please login first!");';
      echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/index/login.php";';
      echo '</script>';
    }
    else{
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
            
            $cas_username = $_SESSION["username"];
          }
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./createEvent.css" rel="stylesheet" />
    <title>Save Organization</title>
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
			
			//select statements
			$sql_select = "SELECT name,email,phone,bio FROM organizations WHERE m_username = '".$cas_username."' ;";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
	<form action="updateOrg.php" method="POST">
		  <div class="right">
				<div class="title ei">Organization Information</div>      
			<div class="line"> 
					<?php while ($data = mysqli_fetch_assoc($select)) {?>
				  <div class="form-item">
				<fieldset>
		<label>Organization Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"/> </label>
				<!-- <input type="text" placeholder="Culture club" /> -->
			  <br />
        <label>Email: <input type="text" name="email" value="<?php echo $data['email']; ?>"/> </label>
				<!-- <input type="text" placeholder="xx@xx.xxx" /> -->
			  <br />
        <label>Phone:  <input type="text" name="phone" value="<?php echo $data['phone']; ?>"/> </label>
				<!-- <input type="text" placeholder="phone" /> -->
			  <br />
				<label>Description: <input type="text" name="address" value="<?php echo $data['bio']; ?>"/> </label>
        <!-- <input type="text" placeholder="aenogirupbgeoiaknolvmpge" /> -->
        <br />
				<?php }?>
			  </fieldset>
			  </div>
			  </div>

					  <button type="submit">Save Edit</button>
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