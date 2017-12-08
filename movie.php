<?php
	session_start();
?>
<html>
<head>
	<link rel="shortcut icon" href="Images/tile.ico" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="CSS/homecss.css">
	<link href='https://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
 		<li ><a href="default.asp"><button class="btn" > FILMS </button></a></li> 
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
  	<br>
  	<div style = "float : right; width : 250px; postion : absoulute; top : 0px;">
  	<img src="Images/search.png" style = "float:right" width="30px" onclick="searchF()"/>
  	<div style = "float:right">
  	<input type="text" class = "font" placeholder="Search..." id="search" width="40px" length="20px" style = "border:solid black; background-color:black; color: rgb(235, 230, 230); font-size: 12pt; font-family: 'Wellfleet', cursive;"/>
  	</div>
  	</div>
  	<br><br><br>
 	<hr>
	<div class = "tilecap">
  	Screening Now
	<div class="container">
		<ul class="nav nav-tabs" style = "position : absolute; left : 0px">
		<li class="active"><a data-toggle="tab" href="#action">Action</a></li>
		<li><a data-toggle="tab" href="#comedy">Comedy</a></li>
		<li><a data-toggle="tab" href="#drama">Drama</a></li>
		<li><a data-toggle="tab" href="#thriller">Thriller</a></li>
		<li><a data-toggle="tab" href="#adventure">Adventure</a></li>
		</ul>

		<div class="tab-content">
			<div id="action" class="tab-pane fade in active">
				<br/><br/>
				<div>
					<span class = "tilefont" style = "position : absolute; left:130px">
					<br><br><br>
					Bachchan
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=126"><img src = "Images/actionbachchan.jpg" class = "tile" id = "movie" style = "position : absolute; left : 70x"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 380px">
					<br><br><br>
					Avatar
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=101"><img src = "Images/actionavatar.jpg" class = "tile" id = "movie" style = "position : absolute; left : 310px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 570px">
					<br><br><br>
					The Dark Knight
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=108"><img src = "Images/actiondarkknight.jpg" class = "tile" id = "movie" style = "position : absolute; left : 545px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 820px">
					<br><br><br>
					Mad Max
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=103"><img src = "Images/actionmadmax.jpg" class = "tile" id = "movie" style = "position : absolute; left : 770px"/> </a>
					
					<span class = "tilefont" style = "position : absolute; left: 1080px">
					<br><br><br>
					Noah
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=117"><img src = "Images/actionnoah.jpg" class = "tile" id = "movie" style = "position : absolute; left : 1000px"/></a>
					<br><br><br><br>					
				</div>
			</div>

    
	
			<div id="comedy" class="tab-pane fade">
				<br/><br/>
				<div>
					<span class = "tilefont" style = "position : absolute; left:130px">
					<br><br><br>
					3 Idiots
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=119"><img src = "Images/comedy3idiots.jpg" class = "tile" id = "movie" style = "position : absolute; left : 70px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 320px">
					<br><br><br>
					Attack on the Block
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=116"><img src = "Images/comedyattackontheblock.jpg" class = "tile" id = "movie" style = "position : absolute; left : 310px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 570px">
					<br><br><br>
					English Vinglish
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=121"><img src = "Images/comedyenglishvinglish.jpg" class = "tile" id = "movie" style = "position : absolute; left : 545px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 815px">
					<br><br><br>
					Inside Out
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=102"><img src = "Images/comedyinsideout.jpg" class = "tile" id = "movie" style = "position : absolute; left : 770px"/> </a>
					
					<span class = "tilefont" style = "position : absolute; left: 1000px">
					<br><br><br>
					Ulidavaru Kandanthe
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=125"><img src = "Images/comedyulidavarukandanthe.jpg" class = "tile" id = "movie" style = "position : absolute; left : 1000px"/></a>
					<br><br><br><br>					
				</div>
			</div>
			
			
			<div id="drama" class="tab-pane fade">
				<br/><br/>
				<div>
					<span class = "tilefont" style = "position : absolute; left:105px">
					<br><br><br>
					12 Angry Men
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=109"><img src = "Images/drama12angrymen.jpg" class = "tile" id = "movie" style = "position : absolute; left : 70px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 335px">
					<br><br><br>
					Chak De India
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=120"><img src = "Images/dramachakdeindia.jpg" class = "tile" id = "movie" style = "position : absolute; left : 300px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 550px; font-size:19px">
					<br><br><br>
					The God Father 
					Part 1
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=106"><img src = "Images/dramathegodfatherpart1.jpg" class = "tile" id = "movie" style = "position : absolute; left : 545px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 772px; font-size:19px">
					<br><br><br>
					The God Father 
					Part 2
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=107"><img src = "Images/dramathegodfatherpart2.jpg" class = "tile" id = "movie" style = "position : absolute; left : 770px"/> </a>
					
					<span class = "tilefont" style = "position : absolute; left: 1025px; font-size:19px">
					<br><br><br>
					The Shawshank <br>
					&nbsp;&nbsp;&nbsp;Redemption
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=105"><img src = "Images/dramatheshawshankredemption.jpg" class = "tile" id = "movie" style = "position : absolute; left : 1000px"/></a>
					<br><br><br><br>					
				</div>
			</div>
			
			
			<div id="thriller" class="tab-pane fade">
				<br/><br/>
				<div>
					<span class = "tilefont" style = "position : absolute; left:100px">
					<br><br><br>
					RangiTaranga
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=123"><img src = "Images/thrillerrangitaranga.jpg" class = "tile" id = "movie" style = "position : absolute; left : 70px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 380px">
					<br><br><br>
					Lucia
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=124"><img src = "Images/thrillerlucia.jpg" class = "tile" id = "movie" style = "position : absolute; left : 310px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 600px">
					<br><br><br>
					Lincoln
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=118"><img src = "Images/thrillerlincoln.jpg" class = "tile" id = "movie" style = "position : absolute; left : 545px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 830px">
					<br><br><br>
					Spectre
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=104"><img src = "Images/thrillerspectre.jpg" class = "tile" id = "movie" style = "position : absolute; left : 770px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 1010px">
					<br><br><br>
					The Bourne Legacy
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=115"><img src = "Images/thrillerthebournelegacy.jpg" class = "tile" id = "movie" style = "position : absolute; left : 1000px"/></a>
					<br><br><br><br>					
				</div>
			</div>
			
			
			<div id="adventure" class="tab-pane fade">
				<br/><br/>
				<div>
					<span class = "tilefont" style = "position : absolute; left:100px">
					<br><br><br>
					Lord of the Rings
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=110"><img src = "Images/adventurelotrings.jpg" class = "tile" id = "movie" style = "position : absolute; left : 70px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 360px">
					<br><br><br>
					North Men
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=112"><img src = "Images/adventurenorthmen.jpg" class = "tile" id = "movie" style = "position : absolute; left : 310px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 590px">
					<br><br><br>
					Pacific Rim
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=113"><img src = "Images/adventurepacificrim.jpeg" class = "tile" id = "movie" style = "position : absolute; left : 545px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 772px">
					<br><br><br>
					Season Of The Witch
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=114"><img src = "Images/adventureseasonofthewitch.jpg" class = "tile" id = "movie" style = "position : absolute; left : 770px"/></a>
					
					<span class = "tilefont" style = "position : absolute; left: 1030px">
					<br><br><br>
					Yeh Jawaani<br>
					&nbsp;&nbsp;&nbsp;Hai Deewani
					</span>
					<a href="http://localhost/WT Assignment/movieTemplate.php?key=122"><img src = "Images/adventureyjhd.jpg" class = "tile" id = "movie" style = "position : absolute; left : 1000px"/></a>
					<br><br><br><br>					
				</div>
			</div>
						
		</div>
	</div>
	<br />
	<hr />
  	
	<div class = "tilecap">
		New Releases
  	</div>
  	
	
	<div>
		<span class = "tilefont" style = "position : absolute; left:77px; font-size:18px;">
		<br><br><br><br>
		Batman v/s Superman
		</span>
		<img src = "Images/newreleasebatmanvssuperman.jpg" class = "tile" id = "movie" style = "position : absolute; left : 70px"/>
		
		<span class = "tilefont" style = "position : absolute; left: 310px; font-size:15.6px">
		<br><br><br>
		Captain America - Civil War
		</span>
		<img src = "Images/newreleasecaptainamericacivilwar.jpg" class = "tile" id = "movie" style = "position : absolute; left : 310px"/>
		
		<span class = "tilefont" style = "position : absolute; left: 565px; font-size: 18px">
		<br><br><br>
		Mockingjay Part - II
		</span>
		<img src = "Images/newreleasehungergamesmockingjaypart2.jpg" class = "tile" id = "movie" style = "position : absolute; left : 545px"/>
		
		<span class = "tilefont" style = "position : absolute; left: 820px;">
		<br><br><br>
		Spectre
		</span>
		<a href="http://localhost/WT Assignment/movieTemplate.php?key=104"><img src = "Images/newreleasespectre.jpg" class = "tile" id = "movie" style = "position : absolute; left : 770px"/></a>

		<span class = "tilefont" style = "position : absolute; left: 1010px; font-size:17.9px">
		<br><br><br>
		Star Wars - Episode 7
		</span>
		<img src = "Images/newreleasestarwarsepisode7.jpg" class = "tile" id = "movie" style = "position : absolute; left : 1000px"/>
		<br/><br/><br/><br/>
  	</div>
	
	<br />
	<hr />
 
 </body>
</html>
