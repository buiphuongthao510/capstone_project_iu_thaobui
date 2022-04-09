<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./styleEvent.css" rel="stylesheet">
  <title>Events</title>
<style>
  img{
    border: 5px solid;
  }

  .ui {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  background: rgb(228, 228, 228);
  border-radius: 50%;
  }
  </style>

</head>

<?php include './includes/header.php'; ?>

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
        <div class="button login">
          <a href="https://cgi.luddy.indiana.edu/~team21/index/profile.php"><button>User Profile</button></a>
        </div>
      </div>
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
            
            
			//select statements
			$sql_select = "SELECT event_name,event_date,event_time,address FROM events WHERE username IS NOT NULL;";
			
			$select = mysqli_query($conn, $sql_select);
      
  ?>
	
    <div class="overview-right">
	<form action="reserveEvent.php" method="GET">
      <div class="up-item b-line">

        <?php while ($data = mysqli_fetch_assoc($select)) {
          $id = $data['id'];
          $id = GET(['id']);
          
          ?>
      
      <div>
     
      <img src="img/IUlogo.png" ALIGN="left" />
    
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
      <br />
      <p align="right">
      <button> <? echo "<a href='reserveEvent.php?id=$id'<button type='button' >More Info</button></a>"; ?> </button>
      
      <br />
      <br /> 
      <br />
      <br />
      <hr>    
      <br />
      </p>

        <?php }?>
        
      </div>
        </div>
    </div>
  </div>
</body>

</html>