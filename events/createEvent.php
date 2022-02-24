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
		<form action="submitEvent.php" method="POST">
          <div class="line">
            <div class="form-item">
              <div><b>Event Name</b></div>
              <input type="text" name="eName"/>
            </div>
            <div class="form-item">
              <div><b>Date</b></div>
              <input type="text" placeholder="mm/dd/yyyy" name="date"/>
            </div>
          </div>
          <div class="line">
            <div class="form-item">
              <div><b>Location</b></div>
              <input type="text" name="location"/>
            </div>
            <div class="form-item">
              <div><b>Contact Information</b></div>
              <input type="text" name="contactInfo"/>
            </div>
          </div>
		
		<input type="file" id="photoInput">
		<div id="displayPhoto"></div>
		<script src="upload.js"></script>
		
		<h2> Event Information: </h2>
			<textarea id="description" name="description" rows="10" cols="50">
			</textarea>
		<div class="button-wrap">
			<button type="Create">Create</button>
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