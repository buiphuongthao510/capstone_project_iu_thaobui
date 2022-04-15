<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet" />
    <title>Login</title>
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
        <div class="button login">
          <a href="https://idp.login.iu.edu/idp/profile/cas/login?service=https://cgi.luddy.indiana.edu/~team21/index/index.php">Login</a>
        </div>
      </div>
    </header>
    <div class="banner">
      <div class="text">Welcome to Youthon</div>
      <div class="button">Join Today</div>
    </div>

    <section>
      <div class="title">Find your passion group</div>
      <div class="group-list">
        <a class="group-item">
          
            <?php
              // CONNECT DATABASE
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
            

            
              // Query
              $sql = "SELECT COUNT(*) as 'count' FROM organizations;";
              $result = mysqli_query($conn, $sql);

              if(!$result) {
                echo $sql;
              } else{
                  while($data = mysqli_fetch_assoc($result)) {
            // display content
                    echo '<div>'.$data['count'].'</div>';  
                  }
                }
            ?>  

          
          
          <div>Student</div>
          <div>organizations</div>
        </a>
        <a class="group-item">
          <div>0</div>
          <div>Transactions</div>
          <div>made</div>
        </a>
        <a class="group-item">
          <div>0</div>
          <div>Funding</div>
          <div>raised</div>
        </a>
      </div>
    </section>

    <section class="club">
      <img src="./img/banner2.png" />
      <div>
        <div class="title">
        <?php
        // CONNECT DATABASE
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

        //query
          $sql = 'SELECT name as name FROM organizations ORDER BY RAND() LIMIT 1;';
          $result2 = mysqli_query($conn, $sql);

        if(!$result2) {
         echo $sql;
        } else{
          while($data = mysqli_fetch_assoc($result2)) {
        // display content
          echo '<div>'.$data['name'].'</div>';  
        }
      }
      ?>  
        </div>
        <div class="text">
        </div>
      </div>
    </section>

    <section class="events">
      <div class="title">Featured events</div>
      <div class="events-list">
        <div class="events-item">
          <img src="./img/banner2.png" />
          <div class="name">
            <?php

              // CONNECT DATABASE
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
            
              // Query
              $sql = 'SELECT event_name as name FROM events ORDER BY RAND() LIMIT 1;';
              $result1 = mysqli_query($conn, $sql);
              
              if(!$result1) {
                echo $sql;
              } else{
                  while($data = mysqli_fetch_assoc($result1)) {
            // display content
                    echo '<div>'.$data['name'].'</div>';  
                  }
                }
            ?>  
        
          </div>
          <div class="text">
          </div>
        </div>
        <div class="events-item">
          <img src="./img/event-image-2.jpeg" />
          <div class="name">
          <?php

           // CONNECT DATABASE
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
          
          //query
          $sql = 'SELECT event_name as name FROM events ORDER BY RAND() LIMIT 1;';
          $result2 = mysqli_query($conn, $sql);

          if(!$result2) {
            echo $sql;
          } else{
              while($data = mysqli_fetch_assoc($result2)) {
        // display content
                echo '<div>'.$data['name'].'</div>';  
              }
            }
        ?>  
    
          </div>
          <div class="text">
          </div>
        </div>
        <div class="events-item">
          <img src="./img/event-image-3.jpeg" />
          <div class="name">
            <?php
            // CONNECT DATABASE
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
          
           //Query
              $sql = 'SELECT event_name as name FROM events ORDER BY RAND() LIMIT 1;';

              $result3 = mysqli_query($conn, $sql);

              if(!$result3) {
                echo $sql;
              } else{
                  while($data = mysqli_fetch_assoc($result3)) {
            // display content
                    echo '<div>'.$data['name'].'</div>';  
                  }
                }
            ?>  

          </div>
          <div class="text">
          </div>
        </div>
      </div>
    </section>

    <div style="text-align: center">
      <div class="button more"><a href = "https://cgi.luddy.indiana.edu/~team21/events/events.php">Explore more events</a></div>
    </div>

    <section class="rank">
      <div class="title">Monthly Ranking</div>
      <div class="rank-list-wrap">
        <div>
          <div class="title-sub">Enegagement Points Leaders</div>
          <?php
          // CONNECT DATABASE
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

          $sql_select_points = "SELECT name, points FROM organizations ORDER BY points DESC;";
          $result = mysqli_query($conn,$sql_select_points);
          $ranking = 1;

          if (mysqli_num_rows($result)){
            while($rows = mysqli_fetch_array($result)){
          
          ?>
          <div class="row">
            <?php echo '<div class="order order-1">'.$ranking.'</div>'?>
            <?php echo '<div class="name">'.$rows['name'].'</div>'?>
            <?php echo '<div>'.$rows['points'].'</div>'?>
            <?php $ranking++;?>
          </div>
          <?php }
            }?>
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