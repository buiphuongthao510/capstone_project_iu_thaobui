<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./style.css" rel="stylesheet">
  <link href="./createEvent.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <header>
    <p class="logo">Youthon</p>
    <p>Events</p>
    <p>Organizations</p>
    <p>Donation</p>
    <p style="flex: 1 1 auto;">Search</p>
    <div class="ui">UI</div>
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
		
		
		<div class="overview-right">
		  <div class="up-item b-line">
			<img src="../img/banner2.png" alt="">
			<div>
			  <div class="form-item">
				  <label for="eName" class="form-label"><b>Event Name:</b></label>
				  <input type="text" class="form-item" id="eName" name="eName" tabindex="1" required>
				</div>
			  <div class="form-item">
				  <label for="date" class="form-label"><b>Date:</b></label>
				  <input type="text" class="form-item" id="date" name="date" tabindex="2" required>
				</div>
			  <div class="form-item">
				  <label for="location" class="form-label"><b>Location:</b></label>
				  <input type="text" class="form-item" id="location" name="location" tabindex="3" required>
				</div>
			  <div class="form-item">
				  <label for="conInfo" class="form-label"><b>Contact Information:</b></label>
				  <input type="text" class="form-item" id="conInfo" name="conInfo" tabindex="4" required>
				</div>
			  <div class="form-item">
				  <label for="eInfo" class="form-label"><b>Event Information:</b></label>
				  <textarea class="form-item" rows="10" cols="50" id="eInfo" name="eInfo" tabindex="5"></textarea>
				</div>
				
				<div>
			<form action="reserveEvent.php" method="POST">
				<input type="radio" name="choice" > I will be attenting this event!
				<br>
				<input type="radio" name="choice" > I won't be attenting this event!
			</div>
			
			<div class="button-wrap">
				<button type="Create">Reserve</button>
			</div>
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