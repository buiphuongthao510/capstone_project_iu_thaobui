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
            include './includes/dbConnect.php';
            session_start();

            $username = $_SESSION["username"];
            
            //select statements
            $sql_select = "SELECT first_name,last_name, dob,email FROM members WHERE $username"; 

            $select = mysqli_query($conn, $sql_select);

            // display contents 
            if (!$select) {
                echo $sql_select;
            } else {
                while ($data = mysqli_fetch_assoc($select)) {
                        echo "<div>First name: {$data['first_name']}</div>" ;
                    
                }
            }
        ?>
      <div class="right">
        <div class="title gi">General Information</div>
        <div class="line">
          <div class="form-item">
            <div>First name: </div>
            <!-- <input type="text" placeholder="Sam" /> -->
          </div>
          <div class="form-item">
            <div>Last name</div>
            <!-- <input type="text" placeholder="Fischer" /> -->
          </div>
        </div>
        <div class="line">
          <div class="form-item">
            <div>Date of Birth</div>
            <!-- <input type="text" placeholder="mm/dd/yyyy" /> -->
          </div>
          <div class="form-item">
            <div>Gender</div>
            <!-- <input type="text" placeholder="Fischer" /> -->
          </div>
        </div>
        <div class="line">
          <div class="form-item">
            <div>Email</div>
            <!-- <input type="text" placeholder="sfsich@email.com" /> -->
          </div>
        </div>

        <a href="edit-profile.php"><button>Edit Profile</button></a>
      </div>
    </section>
    <?php include './includes/footer.php'?>
  </body>
</html>
