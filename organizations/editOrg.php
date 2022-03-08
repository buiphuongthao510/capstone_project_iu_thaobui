<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet" />
    <title>Edit Org</title>
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
          <div><a href="https://cgi.luddy.indiana.edu/~team21/organizations/org_membership.php">Membership</a></div>
        </div>
        <div class="nav-item">
          <div><a href = "https://cgi.luddy.indiana.edu/~team21/organizations/createOrganizations.php">Create Organization</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/organizations/editOrg.php">Edit Organization</a></div>
        </div>
        <div class="nav-item">
          <div><a href = "https://cgi.luddy.indiana.edu/~team21/index/profile.php"> Back </a></div>
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
      $sql_select = ""; 

      $select = mysqli_query($conn, $sql_select);

    ?>

    <div class="right">
        
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
            
    