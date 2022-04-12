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
    <link href="./createOrg.css" rel="stylesheet" />
    <title>Create Org</title>
  </head>

  <body>
  <header>
      <div class="logo">
        <a href = "https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a>
      </div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="">Donation</a>
        <a href="#"><?php include_once("../includes/search.php")?></a>
      </div>
    </header>

  <section class="nav">
      <div class="left">
        <div class="avatar">
          <div class="user-name">Username</div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/organizations/org_membership.php">Membership</a></div>
        </div>
        <div class="nav-item">
          <div><a href = "https://cgi.luddy.indiana.edu/~team21/organizations/createOrganizations.php">Create Organization</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/organizations/editOrg.php">Edit Organization</a></div>
        </div>
        <div class="nav-item">
          <div><a href = "https://cgi.luddy.indiana.edu/~team21/index/profile.php"> Back </a></div>
        </div>
      </div>
        <div class="right">
		<form action="insertOrganization.php" method="POST" enctype="multipart/form-data">
          <div class="line">
            <div class="form-item">
			  <fieldset>
				<label>Organization Name: <input type="text" name="name" /></label>
				<br />
				<label>Email: <input type="text" placeholder="xxx@xx.xxx" name="email" /></label>
				<br />
        <label>Phone: <input type="text" placeholder="xxxxxxxxxx" name="phone" /></label>
				<br />
				<label>Description: <input type="text" name="bio" rows = 10/></label>
				<br />
        <label>Donation needed(required): <input  type="text" placeholder = "No more than 100" name="donation"/></label>
        <br />
				<label>Upload Organization Photo: <input type="file" name="picProfile" value="" /></label>	
			  </fieldset>
			  <br />
			  <button type="submit" name="submit">Create Organization </button>
		</form>
            </div>
  
            </div>
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