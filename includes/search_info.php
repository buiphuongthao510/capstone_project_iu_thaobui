<?php
// CONNECT DATABASE
 $servername = "db.luddy.indiana.edu";
 $username = "i494f21_team21";
 $password = "my+sql=i494f21_team21";
 $dbname = "i494f21_team21";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

$o_id = $_GET['o_id'];//get id
if(empty($o_id)){
  echo"<script>alert('o_id has not been set!');history.go(-1);</script>";exit;
}
if($o_id == 'null'){
  echo"<script>alert('o_id has not been set!');history.go(-1);</script>";exit;
}
$sql = "SELECT * FROM organizations WHERE o_id=$o_id";//search o_id in database
$result = $conn->query($sql);//execute the sql
$data = $result->fetch_assoc();//transform queries to associative array

// 
$o_id = $data['o_id'];// organizations 的 o_id
$events_sql = "SELECT * FROM events WHERE o_id=$o_id";//search o_id in database
$events_result = $conn->query($events_sql);//execute the sql
$events_data = $events_result->fetch_assoc();//transform queries to associative array
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../events/createEvent.css" rel="stylesheet" />
    <title>Search info</title>
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
      </div>
      <div class="button-wrap">
        <div class="button login">Log in</div>
        <div class="button">Register</div>
      </div>
  </header>

    <section class="nav">
<!--      <div class="left">-->
<!--        <div class="avatar">-->
<!--        <div class="user-name">Username</div>-->
<!--        </div>-->
<!--        <div class="nav-item">-->
<!--          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/registeredEvent.php">Registered Events</a></div>-->
<!--        </div>-->
<!--        <div class="nav-item">-->
<!--          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/createEvent.php">Create Event</a></div>-->
<!--        </div>-->
<!--        <div class="nav-item">-->
<!--          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/editEvent.php">Edit Event</a></div>-->
<!--        </div>-->
<!--        <div class="nav-item">-->
<!--          <div><a href = "https://cgi.luddy.indiana.edu/~team21/index/profile.php"> Back </a></div>-->
<!--        </div>-->
<!--		</div>-->
	
		
    <div class="right">
          <div class="line">
            <div class="form-item">
			  <fieldset style="width: 500px;text-align: center">
                  <h1>Search info</h1>
				<label>Name: <?php echo $data['name'] ?></label>
				<br />
                  <label>email: <?php echo $data['email'] ?></label>
                  <br />
                  <label>phone: <?php echo $data['phone'] ?></label>
                  <br />
                  <label>bio: <?php echo $data['bio'] ?></label>
                  <br />
              
			
			</div>
  
          </div>
		</div>
		
    </section>

    <footer>
      <div class="link-wrap">
        <a>Resource</a>
        <a>Help desk</a>
        <a>Report</a>
        <a>Q&A</a>
      </div>
      <div class="f-logo">Youthon</div>
    </footer>
  </body>
</html>