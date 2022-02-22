<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./styleEvent.css" rel="stylesheet">
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

  <div class="main">
    <div class="left">
      <div>Clubs:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

      <div>Rating:</div>
      <div>
        <div>☆☆☆☆☆</div>
        <div>☆☆☆☆☆</div>
        <div>☆☆☆☆☆</div>
        <div>☆☆☆☆☆</div>
      </div>

      <div>Funding points:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>1through10</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

      <div>Engagement points:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>1 through10</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

      <div>Clubs view:</div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Top</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>
      <div class="checkbox">
        <div class="koukou"></div>
        <div>Sports</div>
      </div>

    </div>
    <div class="overview-right">
	<form action="reserveEvent.php" method="POST">
      <div class="up-item b-line">
        <img src="../img/banner2.png" alt="">
        <div>
		  <label for="eName">Event Name:</label>
		  <input type="text" id="eName" name="eName">
		  <br>
          <label for="date">Date:</label>
		  <input type="text" id="date" name="date">
		  <br>
          <label for="location">Location:</label>
		  <input type="text" id="loaction" name="location">
		  <br>
          <label for="conInfo">Contact Information:</label>
		  <input type="conInfo" id="conInfo" name="conInfo">
		  <br>
		  <div class="button-wrap">
			<button type="Create">More Info</button>
		</div>
        </div>
      </div>
      <div class="up-item b-line">
        <img src="../img/banner2.png" alt="">
        <div>
          <div class="up-name" style="font-size: 24px;margin: 0 0 8px;">Event Name</div>
          <div class="up-name">Date: xxxxx</div>
          <div class="up-name">Location: xxxxx</div>
          <div class="up-name">Contact Information: xxxxx</div>
		  <div class="button-wrap">
			<button type="Create">More Info</button>
		</div>
        </div>
      </div>
      <div class="up-item b-line">
        <img src="../img/banner2.png" alt="">
        <div>
          <div class="up-name" style="font-size: 24px;margin: 0 0 8px;">Event Name</div>
          <div class="up-name">Date: xxxxx</div>
          <div class="up-name">Location: xxxxx</div>
          <div class="up-name">Contact Information: xxxxx</div>
		  <div class="button-wrap">
			<button type="Create">More Info</button>
		</div>
        </div>
      </div>
      <div class="up-item b-line">
        <img src="../img/banner2.png" alt="">
        <div>
          <div class="up-name" style="font-size: 24px;margin: 0 0 8px;">Event Name</div>
          <div class="up-name">Date: xxxxx</div>
          <div class="up-name">Location: xxxxx</div>
          <div class="up-name">Contact Information: xxxxx</div>
		  <div class="button-wrap">
			<button type="Create">More Info</button>
		</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>