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

              // Query
              $sql = 'SELECT COUNT(*) FROM organizations';
              $result = mysqli_query($conn, $sql);
              
              //disply content
              if(!$result) {
                echo $sql;
              } else{
                while($data = mysqli_fetch_assoc($result)){
                  echo "<div> {$data} </div>";
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
              $sql_rand1 = 'SELECT event_name FROM events ORDER BY RAND() LIMIT 0,1;';
              $result1 = mysqli_query($conn, $sql);
              
              //disply content
              if(!$result1) {
                echo $sql_rand1;
              } else{
                while($data = mysqli_fetch_assoc($result1)){
                  echo "<div> {$data} </div>";
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
          $sql = 'SELECT event_name FROM events ORDER BY RAND() LIMIT 0,1;';
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
      <div class="button more"><a href = 'events.php'>Explore more events</a></div>
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

    include './includes/dbConnect.php';

    $_SESSION["username"] = $result;
    $sql_insert = "INSERT INTO members(username) VALUES($result)";

    //check if username exists in database, if yes then proceed, if not insert new row
    $insert = mysqli_query($conn, $sql_insert);
    echo $result;
    ?>
  </body>
</html>
