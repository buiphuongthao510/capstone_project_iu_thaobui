<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./createEvent.css" rel="stylesheet" />
    <title>Document</title>
  </head>

  <body>
  <header>
      <div class="logo"><a href="https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a></div>
      <div class="menu-list">
        <a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a>
        <a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a>
        <a href="">Donation</a>
        <a href="">Search</a>
      </div>
      <div class="button-wrap">
        <div class="button login">Log in</div>
        <div class="button">Register</div>
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
          <div>Create Event</div>
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
	
		
    <div class="right">
		<form action="insertEvent.php" method="POST" enctype="multipart/form-data">
          <div class="line">
            <div class="form-item">
			  <fieldset>
				<label>Event Name: <input type="text" name="event_name" /></label>
				<br />
				<label>Date: <input type="text" placeholder="yyyy-mm-dd" name="event_date" /></label>
				<br />
        <label>Time: <input type="text" placeholder="hr:mm:ss" name="event_time" /></label>
				<br />
				<label>Location: <input type="text" name="address" /></label>
				<br />
				<label>Upload Event Photo: <input type="file" name="picEvent" value="" /></label>	
			  <br />
				<br />
				<label>Event Description <br /> <textarea id="description" name="description" rows="10" cols="50"></textarea></label>

        </fieldset>
			  <br />
			  <button type="submit" name="submit">Create Event</button>
			</form>
			
			</div>
  
          </div>
		</div>
		
    </section>

    <footer>
      <div class="link-wrap">
        <a>Resource</a>
        <a>Help deak</a>
        <a>Report</a>
        <a>Q&A</a>
      </div>
      <div class="f-logo">Youthon</div>
    </footer>
  </body>
</html>