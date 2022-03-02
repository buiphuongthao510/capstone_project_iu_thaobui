<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./styleEvent.css" rel="stylesheet">
  <title>Document</title>
</head>

<?php include './includes/header.php'; ?>

<body>
  <header>
    <p class="logo">Youthon</p>
    <p>Events</p>
    <p>Organizations</p>
    <p>Donation</p>
    <p style="flex: 1 1 auto;">Search</p>
    <div class="ui">UI</div>
  </header>

  <div class="main">
    <div class="left">
      <div>Clubs:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

      <div>Rating:</div>
      <div>
        <div>☆☆☆☆☆</div>
        <div>☆☆☆☆☆</div>
        <div>☆☆☆☆☆</div>
        <div>☆☆☆☆☆</div>
      </div>

      <div>Funding points:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>1through10</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

      <div>Engagement points:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>1 through10</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

      <div>Clubs view:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Top</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
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
			$sql_select = "SELECT event_name,event_date,event_time,address FROM events ORDER BY id ;";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
	
    <div class="overview-right">
	<form action="reserveEvent.php" method="POST">
      <div class="up-item b-line">
        <img src="../img/banner2.png" alt="">
		
        <?php while ($data = mysqli_fetch_assoc($select)) {?>
		
		<div class="up-item b-line">
      <div>
        
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
      <br />
      <br />
      <br />
      <p align="right">
        <button type="Create">More Info</button>
      <br />
      <br />
      <br /> 
      <hr>    
      <br />
      <br />
      <br />
      </p>

        <?php }?>
        
      </div>
        </div>

     
    </div>
  </div>
</body>

</html>