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
			$sql_select = "SELECT name,email,phone FROM organizations ORDER BY o_id ;";
			
			$select = mysqli_query($conn, $sql_select);
		
  ?>
	
    <div class="overview-right">
	<form action="reserveEvent.php" method="POST">
      <div class="up-item b-line">
        <img src="../img/banner2.png" alt="">
		
        <?php while ($data = mysqli_fetch_assoc($select)) {?>
		
      <div>
        
			  <label><b>Organization Name:</b> <?php echo $data['name']; ?> </label>
			
			<br />
			  <label><b>Contact Email:</b> <?php echo $data['email']; ?></label>
			
			<br />
			  <label><b>Contact Phone:</b> <?php echo $data['phone']; ?> </label>
			
			
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
      </p>

        <?php }?>
        
      </div>
        </div>

     
    </div>
  </div>
</body>

</html>