<?php
	session_start();
?>
<html>
<head>
	<link rel="shortcut icon" href="Images/tile.ico" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="CSS/homecss.css">
	<link href='https://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	<title>FTDB</title>
	</head>
<body>
	<script src="Javascript/home.js"></script>
	<script> function searchF()
		{
			var searchKey = document.getElementById("search").value;
			window.location="http://localhost/WT Assignment/search.php?search="+searchKey;
		}	
	</script>
	<div>
	<a href = "http://localhost/WT Assignment"><img src = "Images/logo.png" alt = "Logo" style = "float:left"/></a>
	</div>
	<div style = "position:relative; left : 40px; top : 50px; width : 1000px" class = "font">
	<ul>
 		<li ><a href="movie.php"><button class="btn" > FILMS </button></a></li> 
  		<li><a href="underConst.html"><button class="btn" > TV SERIES </button></a></li>
  		<li><a href="underConst.html"><button class="btn" > NEWS </button></a></li>
  		<li><a href="underConst.html"><button class="btn" > PEOPLE </button></a></li>
  	</ul>
  	</div>
  	<?php
  		if(!isset($_SESSION["Name"]))
  		{
  			echo("<a href = 'login.php'><div style = \"position:absolute; right:50px; top:0px; font-family: 'Wellfleet', cursive;\"><br><br>Log In</div></a>");
  		}
  		else
  			echo("<div style = \"position:absolute; right:5px; top:0px; font-family: 'Wellfleet', cursive; color : #ff3300; \"><br><br>Welcome " . $_SESSION["Name"] ."!  <a href = 'logout.php' style = 'font-size:10px; color : #147fc7'> Log Out </a></div>");
  	?>
  	<div style = "float : right; width : 250px; postion : absoulute; top : 0px;">
  	<img src="Images/search.png" style = "float:right" width="30px" onclick="searchF()"/>
  	<div style = "float:right">
  	<input type="text" class = "font" placeholder="Search..." id="search" width="40px" length="20px" style = "border:solid black; background-color:black; color: rgb(235, 230, 230); font-size: 12pt; font-family: 'Wellfleet', cursive;"/>
  	</div>
  	</div>
  	<div align = "center">
  	<img class = "bord" height="600px" name="slide" src="Images/1.jpg" width="100%"/>
  	<img src="Images/prev.png" class="nvgt" id="prev" onclick = "onClickPrev()" style="left:10px; background: #000"></img>
	<img src="Images/next.png" class="nvgt" id="next" onclick = "onClickNext()" style="right:2px; background: #000"></img>
  	</div>
  	<hr />
  	<div class = "rightseg">
  	<br>
  	<br>
  	<div class="leftbord">
      	<div>
	<img width="100%" src = "Images/Film/main.jpg" alt = "Logo"/>
	</div>
      	<div>
      		<div class = "tilecap" style = "font-size: 20px" style = "padding: 10px">&nbsp;&nbsp;TRAILER</div>
      	<div style = "padding: 10px">
      	<iframe width="350" height="315" src="https://www.youtube.com/v/P9-FCC6I7u0">
	</iframe>
      	</div>
      	</div>
      	</div>
      	</div>
  	<div class = "tilecap">
  	Screening Now
  	</div>
  	<div>
  	<span class = "tilefont" style = "position : absolute; left:50px">
  	<br><br><br><br>
  	Escape Plan
  	</span>
  	<a href="http://localhost/WT Assignment/movieTemplate.php?key=111"><img src = "Images/Escape.jpg" class = "tile" id = "movie" style = "position : absolute; left : 10px"/>
  	<span class = "tilefont" style = "position : absolute; left: 270px">
  	<br><br><br><br>
  	Northmen
  	</span>
  	<a href="http://localhost/WT Assignment/movieTemplate.php?key=112"><img src = "Images/Northmen.jpg" class = "tile" id = "movie" style = "position : absolute; left : 220px"/></a>
  	<span class = "tilefont" style = "position : absolute; left: 485px">
  	<br><br><br><br>
  	Pacific Rim
  	</span>
  	<a href="http://localhost/WT Assignment/movieTemplate.php?key=113"><img src = "Images/PacificRim.jpg" class = "tile" id = "movie" style = "position : absolute; left : 440px"/></a>
  	<span class = "tilefont" style = "position : absolute; left: 662px">
  	<br><br><br><br>
  	Season Of The Witch
  	</span>
  	<a href="http://localhost/WT Assignment/movieTemplate.php?key=114"><img src = "Images/SeasonOfWitch.jpg" class = "tile" id = "movie" style = "position : absolute; left : 660px"/></a>
  	<br/><br/><br/><br/><br/><br/>
  	<br/><br/><br/><br/><br/><br/>
  	<hr />
  	</div>
  	<div class = "tilecap">
  	Now Telecasting
  	</div>
  	<div>
  	<span class = "tilefont" style = "position : absolute; left:50px">
  	<br><br><br><br>
  	Agent Carter
  	</span>
  	<a href="http://localhost/WT Assignment/tvSeries.php?key=96"><img src = "Images/Agent-Carter.jpg" class = "tile" id = "movie" style = "position : absolute; left : 10px"/></a>
  	<span class = "tilefont" style = "position : absolute; left: 240px">
  	<br><br><br><br>
  	Game Of Thrones
  	</span>
  	<a href="http://localhost/WT Assignment/tvSeries.php?key=97"><img src = "Images/Game-Of-Thrones.jpg" class = "tile" id = "movie" style = "position : absolute; left : 220px"/></a>
  	<span class = "tilefont" style = "position : absolute; left: 450px; font-size: 17px">
  	<br><br><br><br>
  	The Last Man on Earth
  	</span>
  	<a href="http://localhost/WT Assignment/tvSeries.php?key=98"><img src = "Images/The-Last-Man-On-Earth.jpg" class = "tile" id = "movie" style = "position : absolute; left : 440px"/></a>
  	<span class = "tilefont" style = "position : absolute; left: 663px; font-size: 13.5px">
  	<br><br><br><br><br>
  	How To Get Away 
  	With Murder
  	</span>
  	<a href="http://localhost/WT Assignment/tvSeries.php?key=99"><img src = "Images/How-To-Get-Away-With-Murder.jpg" class = "tile" id = "movie" style = "position : absolute; left : 660px"/> </a>
  	<br/><br/><br/><br/><br/><br/>
  	<br/><br/><br/><br/><br/><br/>
  	<hr />
  	</div>
 </body>
</html>
