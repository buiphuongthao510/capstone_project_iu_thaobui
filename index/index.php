<?php

include './includes/dbConnect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet" />
    <title>Document</title>
  </head>

  <body>
    <header>
      <div class="logo">Youthon</div>
      <div class="menu-list">
        <a href="">Events</a>
        <a href="">Organizations</a>
        <a href="">Donation</a>
        <a href="">Search</a>
      </div>
      <div class="button-wrap">
        <div class="button login">
          <a href="profile.php">TEST</a>
        </div>
      </div>
    </header>
    <div class="banner">
      <div class="text">xxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
      <div class="button">Join Today</div>
    </div>

    <section>
      <div class="title">Find your passion group</div>
      <div class="group-list">
        <a class="group-item">
          
            <?php
              // CONNECT DATABASE
              include './includes/dbConnect.php';
              session_start();
            ?>  

            <?php
              // Query
              $sql = "SELECT COUNT(*) FROM organizations;";
              $result = mysqli_query($conn, $sql);

              if(!$result) {
                echo $sql;
              } else{
                  while($data = mysqli_fetch_assoc($result)) {
<<<<<<< HEAD
            // display content
                    echo '<div>'.$data.'</div>';  
=======
            ?>

            <!--disply content-->
            <?php
                    echo '<div>'.$data["count"].'</div>';  
            ?>
            <?php
>>>>>>> 2fe31cef81cbcdb58f2ef93521001fa409ebfa44
                  }
                }
            ?>  

          
          
          <div>Student</div>
          <div>organizations</div>
        </a>
        <a class="group-item">
          <div>#####</div>
          <div>Transactions</div>
          <div>made</div>
        </a>
        <a class="group-item">
          <div>#####</div>
          <div>Funding</div>
          <div>raised</div>
        </a>
      </div>
    </section>

    <section class="club">
      <img src="./img/banner2.png" />
      <div>
        <div class="title">Club of the day</div>
        <div class="text">
          xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
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
              include './includes/dbConnect.php';
              session_start();
              
              $sql_rand1 = 'SELECT event_name FROM events ORDER BY RAND() LIMIT 0,1;';
              $result1 = mysqli_query($conn, $sql);
              
              //disply content
              if(!$result1) {
                echo $sql_rand1;
              } else{
                while($data = mysqli_fetch_assoc($result1)){
                  echo "<div>".$data."</div>";
                }
              }
        
            
            ?>
          </div>
          <div class="text">
            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
          </div>
        </div>
        <div class="events-item">
          <img src="./img/banner2.png" />
          <div class="name">
          <?php
          // CONNECT DATABASE
          include './includes/dbConnect.php';
          session_start();
          
          //query
          $sql = 'SELECT event_name FROM events ORDER BY RAND() LIMIT 0,1;';
          $result2 = mysqli_query($conn, $sql);

          //display data


          ?>
          </div>
          <div class="text">
            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
          </div>
        </div>
        <div class="events-item">
          <img src="./img/banner2.png" />
          <div class="name">
            <?php
              $sql = 'SELECT event_name FROM events ORDER BY RAND() LIMIT 0,1;';
            ?>
          </div>
          <div class="text">
            xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
          </div>
        </div>
      </div>
    </section>

    <div style="text-align: center">
      <div class="button more"><a href = 'events/events.php'>Explore more events</a></div>
    </div>

    <section class="rank">
      <div class="title">Monthly Ranking</div>
      <div class="rank-list-wrap">
        <div>
          <div class="title-sub">Enegagement Points Leaders</div>
          <div class="row">
            <div class="order order-1">1</div>
            <div class="name">Organization's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order order-2">2</div>
            <div class="name">Organization's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order order-3">3</div>
            <div class="name">Organization's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">4</div>
            <div class="name">Organization's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order">5</div>
            <div class="name">Organization's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">6</div>
            <div class="name">Organization's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order">7</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">8</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order">9</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">10</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
        </div>
        <div>
          <div class="title-sub">Enegagement Points Leaders</div>
          <div class="row">
            <div class="order order-1">1</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order order-2">2</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order order-3">3</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">4</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order">5</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">6</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order">7</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">8</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row">
            <div class="order">9</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
          </div>
          <div class="row bg">
            <div class="order">10</div>
            <div class="name">Organlzation's name</div>
            <div>1920pt</div>
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
    <?php
    session_start();
    $ticket = $_SERVER['QUERY_STRING'];
    $validate_url = "https://idp.login.iu.edu/idp/profile/cas/serviceValidate?".$ticket."&service=https://cgi.luddy.indiana.edu/~team21/index/index.php";
    $result = file_get_contents($validate_url);

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

    $_SESSION["username"] = $result;
    
    $sql_insert = "INSERT IGNORE INTO members (username, first_name, last_name, dob, email, phone, role, picProfile) VALUES ('$result','','',0000-00-00,'','',0,'');";

    if ($conn->query($sql_insert) === TRUE) {
      echo "record inserted successfully";
    } else {
      echo "Error: " .$sql_insert. "<br>".$conn->error;
    }
    ?>
  </body>
</html>
