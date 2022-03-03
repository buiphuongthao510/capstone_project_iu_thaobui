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
          <a href="profile.php"><button>User Profile</button></a>
        </div>
      </div>
    </header>

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
      <div class="right">
        <div class="title gi">General Information</div>
        <div class="line">
          <?php while ($data = mysqli_fetch_assoc($select)) {?>
          <div class="form-item">
            <div>First name: <?php echo $data['first_name']; ?> </div>
            <!-- <input type="text" placeholder="Sam" /> -->
          </div>
          <div class="form-item">
            <div>Last name: <?php echo $data['last_name']; ?></div>
            <!-- <input type="text" placeholder="Fischer" /> -->
          </div>
        </div>
        <div class="line">
          <div class="form-item">
            <div>Date of Birth: <?php echo $data['dob']; ?></div>
            <!-- <input type="text" placeholder="mm/dd/yyyy" /> -->
          </div>
        </div>
        <div class="line">
          <div class="form-item">
            <div>Email: <?php echo $data['email'];?> </div>
            <?php }?>
            <!-- <input type="text" placeholder="sfsich@email.com" /> -->
          </div>
        </div>

        <a href="edit-profile.php"><button>Edit Profile</button></a>
      </div>
    </section>
    <footer>
      <div class="link-wrap">
        <a>Resourcas</a>
        <a>Help deak</a>
        <a>Report</a>
        <a>Q&A</a>
      </div>
      <div class="f-logo">Youthon</div>
    </footer>
  </body>
</html>
