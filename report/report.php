<?php
    session_start();
    if(!isset($_SESSION['username'])){
      echo '<script type="text/javascript">';
      echo 'alert("Unauthorized page! Please login first!");';
      echo 'window.location.href = "https://cgi.luddy.indiana.edu/~team21/index/login.php";';
      echo '</script>';
    }
    else{
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
            
            $cas_username = $_SESSION["username"];
          }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href = "./style.css" rel = "stylesheet"/>
    
    <title>Report</title>
  </head>

  <body>
  <header>
      <div class="logo">
        <a href = "https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a>
      </div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/report/report.php">Report</a>
        <a href="#"><?php include_once("../includes/search.php")?></a>
      </div>
      
      <div class="button-wrap">
        <div class="button login">
          <a href="https://cgi.luddy.indiana.edu/~team21/index/profile.php"><button>User Profile</button></a>
        </div>
      </div>
    </header>
    
    <section>
      <div class= "container">
        <form action = "insertReport.php" method= "POST" enctype="multipart/form-data">
        
          <div class = "form-group">
            <input type ="text" placeholder = "Subject" name = "subject" >
          </div>
          <div class = "form-group">
            <textarea type= "text" placeholder = "Desctiption" name = "description" cols= 40 rows=30> </textarea>
          </div>

            <button type="submit" name="submit">Create Report </button>
        </form>
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

    

  