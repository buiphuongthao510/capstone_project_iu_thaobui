<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styleEvent.css" rel="stylesheet">
    <link href="https://cgi.luddy.indiana.edu/~team21/index/style.css" rel="stylesheet" />

    <title>Events</title>
    <style>
        img{
            border: 5px solid;
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
    <div class="ui"><a href="https://cgi.luddy.indiana.edu/~team21/index/profile.php">UI</a></div>

</header>



<div class="main">
    <div class="left">
<<<<<<< HEAD
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
            
			
			      $id = $_GET["id"];
			
			//select statements
			
			$select = mysqli_query($conn, "SELECT * FROM events");
		
  ?>
	
    <div class="overview-right">
	<form action="reserveEvent.php" method="GET">
      <div class="up-item b-line">

        <?php 
          while ($data = mysqli_fetch_object($select)) {
        ?>
		
      <div>
      <img src="img/IUlogo.png" ALIGN="left" />
      <!-- Display records -->
			  <label><b>Event Name:</b> <?php echo $data->event_name; ?> </label>
			<!-- <input type="text" placeholder="Culture Show" /> -->
			<br />
			  <label><b>Event Date:</b> <?php echo $data->event_date; ?></label>
			<!-- <input type="text" placeholder="yyyy-mm-dd" /> -->
			<br />
			  <label><b>Event Time:</b> <?php echo $data->event_time; ?> </label>
			<!-- <input type="text" placeholder="hh:mm:ss" /> -->
			<br />
			  <label><b>Location:</b> <?php echo $data->address; ?> </label>  
      <br />
      <br />
      <br />
      <!-- Trigger Button -->
      <p align="right">
        <!-- Sets event id and attaching on click -->
      <button class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal" id="<?php echo $data->id; ?>" onclick="showDetails(this);">
       More Info
      </button>
      <br />
      <br />
      <br /> 
      <hr>    
      <br />
      </p>

        <?php }?>

      <!-- Display pop-up -->
      <!-- Modal -->
      <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
        aria-labelledby = "myModalLabel" aria-hidden = "true">
        
        <div class = "modal-dialog">
            <div class = "modal-content">
              
              <div class = "modal-header">
                  <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                        &times;
                  </button>
                  
                  <h4 class = "modal-title" id = "myModalLabel">
                    This Modal title
                  </h4>
              </div>
              
              <div class = "modal-body">
                  <p>Event Name: <span id="event_name"></span></p>
                  <p>Event Date: <span id="event_date"></span></p>
                  <p>Event Time: <span id="event_Time"></span></p>
                  <p>Location: <span id="address"></span></p>
              </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        
      </div><!-- /.modal -->

      <script> 
      function showDetails(button) {
        var id = button.id;
      }

        
      </div>
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
>>>>>>> e77a1ac4d3f4810fe6404522e883dfe3c58a5010
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
    $sql_select = "SELECT event_name,event_date,event_time,address FROM events ORDER BY id;";

    $select = mysqli_query($conn, $sql_select);

    ?>

    <div class="overview-right">
        <form action="reserveEvent.php" method="POST">
            <div class="up-item b-line">

                <?php while ($data = mysqli_fetch_assoc($select)) {?>

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