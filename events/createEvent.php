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
      <div class="logo">Youthon</div>
      <div class="menu-list">
        <a href="">Events</a>
        <a href="">Organizations</a>
        <a href="">Donation</a>
        <a href="">Search</a>
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
		<form action="submitEvent.php" method="POST" enctype="multipart/form-data">
          <div class="line">
            <div class="form-item">
              <input type="hidden" name="submitted" value="true" />
			  <fieldset>
				<label>Event Name: <input type="text" name="event_name" /></label>
				<br />
				<label>Date: <input type="text" placeholder="mm/dd/yyyy" name="event_date" /></label>
				<br />
				<label>Location: <input type="text" name="address" /></label>
				<br />
				<label>Upload Event Photo: <input type="file" name="photoInput" value="" /></label>	
			  </fieldset>
			  <br />
			  <input type="file" name="photoInput" value="" />
			  <br />
			  <input type="submit" value="Create Event" />
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