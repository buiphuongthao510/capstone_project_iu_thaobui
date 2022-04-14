<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styleOrganizations.css" rel="stylesheet">
    <link href="https://cgi.luddy.indiana.edu/~team21/index/style.css" rel="stylesheet" />
    <script src="https://cgi.luddy.indiana.edu/~team21/includes/jquery.js"></script>

    <title>Organization Page</title>
</head>
<style type="text/css">
          h1, h2{margin-top:0;}
          p{color:#ccc;line-height:1.5;}
          #page{width:1280px;padding:20px;margin:0 auto;background:white;}
          .panel{width:220px;height:900px;padding:20px;background-color:#333;color:#fff;box-shadow:inset 0 0 5px 5px #222;    position: fixed;top:60px;left: 0px;z-index: 9999;}
          .panel a{
              color: #fff;
              text-decoration:none;
          }
          header{
            width: 100%;
          }
</style>
<div id="left-panel" class="panel">
          <form style="float: left;" name="myForm" id="form" onsubmit="return false" action="##" method="post">
              <input type="text" style="height: 30px;padding-left: 10px;width: 110px;border-radius: 10px;" autocomplete="off" value="" placeholder="search name" name="name">
              <button style="height: 35px;border:0;background-color: #990000;color: #FFFFFF;border-radius: 10px;padding-left: 10px;padding-right: 10px;cursor:pointer;" onclick="search()">search</button>
          </form>
            <div id="app" style="position: absolute;top: 130px;background-color: #990000;color:#FFFFFF;width: 240px;left: 10px;border-radius: 10px;text-align: center;z-index: 99999">
                <div class="content">

                </div>
            </div>
</div>
<script>
    // ajax no refresh form submit
    function search() {
        var name=document.forms["myForm"]["name"].value;
        if (name==null || name==""){
            alert("search name must be filled out");
            return false;
        }
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../includes/dosearch.php",//use url to submit
            data: $('#form').serialize(),
            //data for returning
            success: function (data) {
                //search out data using jquery to work ajax and turn on website
                $.each(data, function(i, n){
                    if (n.event_name==null || n.event_name==""){
                        $(".content").prepend('<br><a href="https://cgi.luddy.indiana.edu/~team21/includes/search_info.php?o_id='+n.o_id+'" style="color: #FFFFFF;"> name: '+n.name+'</a><br><br>')
                    }else{
                        $(".content").prepend('<br><a href="https://cgi.luddy.indiana.edu/~team21/includes/search_info_events.php?o_id='+n.o_id+'" style="color: #FFFFFF;">event name: '+n.event_name+'</a><br><br>')

                    }
                })

            },
        });
    }
</script>
<header>
      <div class="logo"><a href="https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a></div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="">Donation</a>
       
      </div>
      <div class="button-wrap">
        <div class="button login">
          <a href="https://cgi.luddy.indiana.edu/~team21/index/profile.php"><button>User Profile</button></a>
        </div>
      </div>
  </header>

<body>

<div class="main">
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


    //select statements
    $sql_select = "SELECT name,email,phone,o_id FROM organizations WHERE m_username IS NOT NULL;";

    $select = mysqli_query($conn, $sql_select);

    ?>

    <div class="overview-right">
        <form action="orgDetail.php" method="POST">
            <div class="up-item b-line">
                <img src=".events/img/banner2.png" alt="">

                <?php while ($data = mysqli_fetch_assoc($select)) {
                    $o_id = $data['o_id']?>

                <div>
                <img src="..\img\IUlogo.png" ALIGN="left" />
                    <label><b>Organization Name:</b> <?php echo $data['name']; ?> </label>

                    <br />
                    <label><b>Contact Email:</b> <?php echo $data['email']; ?></label>

                    <br />
                    <label><b>Contact Phone:</b> <?php echo $data['phone']; ?> </label>


                    <br />
                    <br />
                    <br />
                    <p align="right">
                    <button> <? echo "<a href='orgDetail.php?o_id=$o_id'<button type='button' >More Info</button></a>"; ?> </button>
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