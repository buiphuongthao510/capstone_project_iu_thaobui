

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./style.css" rel="stylesheet">
  <link href="./createOrg.css" rel="stylesheet">
  <title>Organization</title>

  <style>
    .description {
      border-radius: 10px;
      width: 250px;
      border-style: solid;
      border-width: thin;
      border-color: black;
      padding: 15px;
    }

    img{
    border: 5px solid;
  }
  </style>

</head>

<body>
<header>
      <div class="logo"><a href="https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a></div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/report/report.php">Report</a>
        <a href="#"><?php include_once("../includes/search.php")?></a>
      </div>
      <div class="button-wrap">

          <a href="https://cgi.luddy.indiana.edu/~team21/index/profile.php"><button>User Profile</button></a>
        </div>
      </div>
  </header>

  <?php include './includes/header.php'; ?>
  
	<section class="nav">
		
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
			
			      $o_id = $_GET["o_id"];
            $_SESSION['o_id'] = $o_id;

			
			//select statements
      
			$sql_select = "SELECT name,email,phone,bio, donation FROM organizations WHERE o_id = $o_id";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
		
		<div class="overview-right">
		  <div class="up-item b-line">
			<img src="../img/banner2.png" alt="">
			<div>
      <?php while ($data = mysqli_fetch_assoc($select)) {?>
			  <div>

        <fieldset>
        <img src="IUlogo.png" ALIGN="left" width="300" height="160"/>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
			  <label><b>Organization Name:</b> <?php echo $data['name']; ?> </label>
        <!-- <input type="text" placeholder="Culture Show" /> -->
      <br />
			  <label><b>Contact Email:</b> <?php echo $data['email']; ?></label>
        <!-- <input type="text" placeholder="yyyy-mm-dd" /> -->
      <br />
			  <label><b>Phone:</b> <?php echo $data['phone']; ?> </label>
        <!-- <input type="text" placeholder="hh:mm:ss" /> -->
      <br />
        <label><b>Donation needed:</b> <?php echo $data['donation']; ?> </label>
      <br />
      <b>Organization Description</b>
      <div class="description">
      <label> <?php echo $data['bio']; ?></textarea> </label>
      </div>
      <?php }?>
      
      </fieldset>
        <!-- <input type="text" placeholder="Wilkie Auditorium" /> -->
				
				<div>
			</div>
      <br />
      <br />
      
          <button> <a href = "./joinOrg.php"> Join Organization </a></button>
          <form action="https://www.paypal.com/donate" method="post" target="_top">
          <input type="hidden" name="business" value="P5EB6FFE9GWPS" />
          <input type="hidden" name="no_recurring" value="1" />
          <input type="hidden" name="currency_code" value="USD" />
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
          </form>

          
        
	    </div>
   
  </div>
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
  
  
</body>
</html>