<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet" />
    <title>Profile</title>
  </head>

  <body>
    <?php include './includes/header.php'; ?>

    <section class="nav">
      <div class="left">
        <div class="avatar">
          <img src="./img/banner2.png" alt="" />
          <div class="user-name">User name</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Overview</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Dashboard</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Registered Event</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Settings</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Help</div>
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

            $username = $_SESSION["username"];
            
            //select statements
            $sql_select = "SELECT first_name,last_name, dob,email FROM members WHERE username = 'ldeeley7';"; 

            $select = mysqli_query($conn, $sql_select);

        ?>
      <form action="update-profile.php" method="POST">
        <div class="right">
          <div class="title gi">General Information</div>
          <?php while ($data = mysqli_fetch_assoc($select)) {?>
          <div class="line">
            <div class="form-item">
              <div>First name</div>
              <input type="text" name="fname" value="<?php echo $data['first_name']; ?>"/>
            </div>
            <div class="form-item">
              <div>Last name</div>
              <input type="text" name="lname" value="<?php echo $data['last_name'] ?>"/>
            </div>
          </div>
          <div class="line">
            <div class="form-item">
              <div>Date of Birth</div>
              <input type="text" name="dob" value="<?php echo $data['dob'] ?>"/>
          </div>
          <div class="line">
            <div class="form-item">
              <div>Email</div>
              <input type="text" name="email" value="<?php echo $data['email'] ?>"/>
            </div>
          </div>
          <?php
          }?>
          <div class="line">
            <button type="submit">Save Profile</button>
          </div>
        </div>
      </form>
    </section>
    <?php include './includes/footer.php'?>
  </body>
</html>
