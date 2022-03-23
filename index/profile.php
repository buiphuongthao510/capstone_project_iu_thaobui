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
      <div class="logo">
        <a href = "https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a>
      </div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="">Donation</a>
        <a href="">Search</a>
      </div>
    </header>

    <section class="nav">
      <div class="left">
        <div class="avatar">
          <div class="user-name">Username</div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/index/profile.php">Profile</a></div>
        </div>
        <div class="nav-item">
          <div><a href ="https://cgi.luddy.indiana.edu/~team21/organizations/org_membership.php">Organizations</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/registeredEvent.php">Events</a></div>
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

            $cas_username = $_SESSION["username"];
            
            //select statements
            $sql_select = "SELECT first_name,last_name, dob,email FROM members WHERE username = '".$cas_username."';"; 

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
        <a>Resources</a>
        <a>Help desk</a>
        <a>Report</a>
        <a>Q&A</a>
      </div>
      <div class="f-logo">Youthon</div>
    </footer>
  </body>
</html>
