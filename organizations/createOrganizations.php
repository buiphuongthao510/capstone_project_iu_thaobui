<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./events/createEvent.css" rel="stylesheet" />
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
          <div>My Memebership</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>My Organizations</div>
        </div>
        <div class="nav-item">
          <img src="./img/banner2.png" alt="" />
          <div>Create Organization</div>
        </div>
        
		</div>

        <div class="right">
		<form action="insertOrganization.php" method="POST" enctype="multipart/form-data">
          <div class="line">
            <div class="form-item">
			  <fieldset>
				<label>Organization Name: <input type="text" name="name" /></label>
				<br />
				<label>Email: <input type="text" placeholder="xxx@xx.xxx" name="email" /></label>
				<br />
                <label>Phone: <input type="text" placeholder="xxx-xxx-xxxx" name="phone" /></label>
				<br />
				<label>Introduction: <input type="text" name="bio" /></label>
				<br />
				<label>Upload Organization Photo: <input type="file" name="picProfile" value="" /></label>	
			  </fieldset>
			  <br />
			  <button type="submit" name="submit">Create Organization </button>
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