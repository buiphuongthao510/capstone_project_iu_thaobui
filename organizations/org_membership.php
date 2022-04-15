<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet" />
    <title>Org Membership</title>
  </head>

  <body>
  <header>
      <div class="logo">
        <a href = "https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a>
      </div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/report/report.php">Report</a>
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
			      $o_id = $_SESSION["o_id"];
			
			//select statements
			$sql_select = "SELECT organizations.name, organizations.email, organizations.phone, organizations.bio FROM organizations, members WHERE organizations.o_id = members.o_id AND members.username = '".$cas_username."';";
			$select = mysqli_query($conn, $sql_select);
		
  ?>
		
  <div class="right">
		<div class="title ei">Membership</div>      
    <div class="line"> 
			<?php while ($data = mysqli_fetch_assoc($select)) {?>
		  <div class="form-item">
        <fieldset>
			  <label><b>Organization Name:</b> <?php echo $data['name']; ?> </label>
        
      <br />
			  <label><b>Organization email:</b> <?php echo $data['email']; ?></label>
        
      <br />
			  <label><b>Phone:</b> <?php echo $data['Phone']; ?> </label>
        
      <br />
			  <label><b>Description:</b> <?php echo $data['bio']; ?> </label>
        
      <br />
      <br />
      
        <?php }?>
      </fieldset>

      </div>
      </div>
      </div>
    </section>
    <footer>
      <div class="link-wrap">
        <a href="https://www.indiana.edu">Resources</a>
        <a href="https://studentaffairs.indiana.edu/student-support/index.html">Help desk</a>
      </div>
      <div class="f-logo">Youthon</div>
    </footer> 
  </body>
</html>
            
    