<?php 
include_once 'db_connection.php'; 
?>




<!DOCTYPE html>
<html>
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
  </style>

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
			
			      $id = $_GET["id"];
            $_SESSION['id'] = $id;

			
			//select statements
      
			$sql_select = "SELECT name,email,phone,bio FROM organizations WHERE o_id = $id";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
		
		<div class="overview-right">
		  <div class="up-item b-line">
			<img src="../img/banner2.png" alt="">
			<div>
      <?php while ($data = mysqli_fetch_assoc($select)) {?>
			  <div class="form-item">
        <fieldset>
			  <label><b>Organization Name:</b> <?php echo $data['name']; ?> </label>
        <!-- <input type="text" placeholder="Culture Show" /> -->
      <br />
			  <label><b>Contact Email:</b> <?php echo $data['email']; ?></label>
        <!-- <input type="text" placeholder="yyyy-mm-dd" /> -->
      <br />
			  <label><b>Phone:</b> <?php echo $data['phone']; ?> </label>
        <!-- <input type="text" placeholder="hh:mm:ss" /> -->
      
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
      <div class="wrapper">
    <?php 
		  $results = mysqli_query($conn,"SELECT * FROM products where status=1");
		  while($row = mysqli_fetch_array($results)){
    ?>
	    <div class="col__box">
	      <h5><?php echo $row['price']; ?></h5>
        <h6>Price: <span> $<?php echo $row['price']; ?> </span> </h6>
        <form class="paypal" action="request.php" method="post" id="paypal_form">
          <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>" >
          <input type="hidden" name="amount" value="<?php echo $row['price']; ?>" >
          <input type="hidden" name="currency_code" value="USD" >
          <input type="submit" name="submit" value="Donate Now" class="btn__default">
        </form>
	    </div>
    <?php } ?>
  </div>
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
  
  
</body>
</html>