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
    <ul>
      <li><a class="logo" href="https://cgi.luddy.indiana.edu/~team21/index/index.php">Youthon</a></li>
      <li><a href="https://cgi.luddy.indiana.edu/~team21/events/events.php">Events</a></li>
      <li><a href="https://cgi.luddy.indiana.edu/~team21/organizations/organizationsPage.php">Organizations</a></li>
      <li><a href="#Donation">Donation</a></li>
      <li><a href="#Donation">Search</a></li>
    </ul>
      </div>
      <div class="button-wrap">
        <div class="button login">Log in</div>
        <div class="button">Register</div>
      </div>
  </header>

    <section class="nav">
      <div class="left">
        <div class="avatar">
        <div class="user-name">Username</div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/registeredEvent.php">Registered Events</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/createEvent.php">Create Event</a></div>
        </div>
        <div class="nav-item">
          <div><a href="https://cgi.luddy.indiana.edu/~team21/events/editEvent.php">Edit Event</a></div>
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