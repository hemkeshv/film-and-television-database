<?php
	 session_start();
	 $db = mysql_connect("localhost","jeevan","jeevan"); 
	 if (!$db) {
	 die("Database connection failed miserably: " . mysql_error());
	 }
	 $db_select = mysql_select_db("ftdb",$db);
	 if (!$db_select) {
	 die("Database selection also failed miserably: " . mysql_error());
	 }
	$result = mysql_query('SELECT title, year, director, productionHouse FROM Movie WHERE CONCAT(title, year, plot, director, productionHouse) LIKE "%'.($_GET["search"]).'%"', $db);
	 if (!$result) {
	 die("Database query failed: " . mysql_error());
	 }
	 $num=mysql_numrows($result);mysql_close();
?>
<html>
<head>
	<link rel="shortcut icon" href="Images/tile.ico" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="CSS/search.css" />
	<link href='https://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:700' rel='stylesheet' type='text/css'>
	<?php echo "<title> Search Results </title>" ?>
</head>
<body>
	<script type="text/javascript">
		var i = 0;
		var t = 0;
		function searchF()
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
  	<br>
  	<div style = "float : right; width : 250px; postion : absoulute; top : 0px;">
  	<img src="Images/search.png" style = "float:right" width="30px" onclick="searchF()"/>
  	<div style = "float:right">
  	<input type="text" class = "font" placeholder="Search..." id="search" width="40px" length="20px" style = "border:solid black; background-color:black; color: rgb(235, 230, 230); font-size: 12pt; font-family: 'Wellfleet', cursive;"/>
  	</div>
  	</div>
  	<br/>
  	<br/>
  	<br/>
  	<br/>
  	<br/>
  	<br/>
  	<div class = "head">Search Results</div>
  	<hr>
  	<?php 
        if($num == 0)
	{
		echo("<div class = 'head2' align = 'center'>No results found! </div>");
		exit();
	}
	?>
        <table border="1" align = "center">
        	<thead>
		<th style = "font-family: 'Exo 2', sans-serif;">
		Movie Name
		</th>
		<th style = "font-family: 'Exo 2', sans-serif;">
		Year
		</th>
		<th style = "font-family: 'Exo 2', sans-serif;">
		Director
		</th>
		<th style = "font-family: 'Exo 2', sans-serif;">
		Production House
		</th>
		</thead>
		<?php	$i=0;
			while ($i < $num) {
				$f1=mysql_result($result,$i,"title");
				$f2=mysql_result($result,$i,"year");$f3=mysql_result($result,$i,"director");
				$f4=mysql_result($result,$i,"productionHouse");?>
				<tr onclick = "searching()" style = "font-family: 'Exo 2', sans-serif;">
				<td>
					<?php echo $f1; ?>
				</td>
				<td>
					<?php echo $f2; ?>
				</td>
				<td>
					<?php echo $f3; ?>
				</td>
				<td>
					<?php echo $f4; ?>
				</td>
				</tr>
				<?php $i++;
		}
			
		?>
	</table>
	<script>
		function searching()
		{
			var a = event.target.innerHTML;
			window.location="http://localhost/WT Assignment/redirect.php?searchKey=" + a;
		}
		function Redirect2() {
               		
            	}	
	</script>
</body>
</html>
