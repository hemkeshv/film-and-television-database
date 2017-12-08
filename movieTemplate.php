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
	$result = mysql_query('SELECT * FROM Movie WHERE CONCAT(mID, title, year, plot, director, productionHouse) LIKE "%'.($_GET["key"]) .'%"', $db);
	 if (!$result) {
	 die("Database query failed: " . mysql_error());
	 }
	 $row = mysql_fetch_array($result);
	 $sum1 = mysql_fetch_assoc(mysql_query('SELECT SUM(rating) AS "sum1" FROM Rating INNER JOIN Users ON Users.UserID = Rating.UserID WHERE mID = ' . $row['mID'] . ' AND Current_Status = "Audience"', $db))["sum1"];
	 $num1 = mysql_fetch_assoc(mysql_query('SELECT COUNT(rating) AS "num1" FROM Rating INNER JOIN Users ON Users.UserID = Rating.UserID WHERE mID = ' . $row['mID'] . ' AND Current_Status = "Audience"', $db))["num1"];
	  $sum2 = mysql_fetch_assoc(mysql_query('SELECT SUM(rating) AS "sum2" FROM Rating INNER JOIN Users ON Users.UserID = Rating.UserID WHERE mID = ' . $row['mID'] . ' AND Current_Status = "Critic"', $db))["sum2"];
	 $num2 = mysql_fetch_assoc(mysql_query('SELECT COUNT(rating) AS "num2" FROM Rating INNER JOIN Users ON Users.UserID = Rating.UserID WHERE mID = ' . $row['mID'] . ' AND Current_Status = "Critic"', $db))["num2"];
	 if($num1 + $num2 == 0)
	 	$rating0 = "U/R";
	 else
	 	$rating0 = round((($sum1 + (2*$sum2))/($num1 + (2*$num2)))*2, 2);
	 if($num1 == 0)
	 	$rating1 = "U/R";
	 else
	 	$rating1 = round(($sum1/$num1)*2, 2);
	 if($num2 == 0)
	 	$rating2 = "U/R";
	 else
	 	$rating2 = round(($sum2/$num2)*2, 2);
	 
?>
<html>
<head>
	<link rel="shortcut icon" href="Images/tile.ico" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="CSS/movtempcss.css" />
	<link href='https://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<?php echo "<title>" .$row["title"] . "</title>" ?>
</head>
<body>
	<script type="text/javascript">
		var i = 0;
		var t = 0;
		var path = new Array();
 		path[0] = "<?php echo $row['img1']; ?>";
		path[1] = "<?php echo $row['img2']; ?>";
		path[2] = "<?php echo $row['img3']; ?>";
		function swapImage()
		{
			document.slide.src = path[i];
   			if(i < path.length - 1) 
   				i++; 
   			else 
   				i = 0;
   			t = setTimeout("swapImage()",3000);
		}
		window.onload=swapImage;
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
  	<div align = "center">
  	<img class = "bord" height="400px" width = "100%" name="slide" src="<?php echo $row['img1']; ?>" alt="Slider">
  	</img>
  	</div>
  	<div class = "rightseg">
  	<div class="leftbord">
  	<table>
  	<tr>
  	<td style = "width : 12%">
  	<fieldset class="fs">
    		<legend class = "col1">Audience Rating</legend>
    		<span style = "font-size : 40px; width : 10px;" class = "col2"> <?php echo $rating1; ?> </span>
    	</fieldset>
    	</td>
    	<td style = "width : 12%">
  	<fieldset class="fs">
    		<legend class = "col1">Overall Rating</legend>
    		<span style = "font-size : 40px; width : 10px;" class = "col2"> <?php echo $rating0; ?> </span>
    	</fieldset>
    	</td>
    	<td style = "width : 12%">
  	<fieldset class="fs">
    		<legend class = "col1">Critic Rating</legend>
    		<span style = "font-size : 40px; width : 10px;" class = "col2"> <?php echo $rating2; ?> </span>
    	</fieldset>
    	</td>
    	</tr>
    	<p style = "text-align : right; color : grey; font-size:10px">*All ratings out of 10 </p>
    	</table>
    	<div>
      	<img width="450px" style = "margin-left: 5px" src = "<?php echo $row['mainImg']; ?>" alt = "Logo"/>
      	</div>
      	<div>
      		<div class = "head3" style = "padding: 10px">TRAILER</div>
      	<div style = "padding: 10px">
      	<iframe width="420" height="315" src="<?php echo $row['trailerLink'] ?>">
	</iframe>
      	</div>
      	</div>
      	</div>
      	</div>
  	<div style = "width: 60%">
  	<?php echo "<div align =\"left \" class=\"head\">".$row["title"] . " <span class=\"small\">" .$row["Certification"] . "</span></div>" ?>
  	<hr />
  	<div class = "head2">THE PLOT</div>
        <?php echo "<p class = \"md\">" .$row["plot"] ."</p> "; ?>
        <div class="head2">Director :</div> <?php echo "<div class = \"md\">" .$row["director"] ."</div> "; ?><br />
        <div class="head2">Release Date:</div><?php echo "<div class = \"md\">" .$row["releaseDate"] ."</div> "; ?><br />
        <div class="head2">Production House: </div><?php echo "<div class = \"md\">" .$row["productionHouse"] ."</div> "; ?><br />
       <form method = "post" action = "addRating.php">
       <fieldset class="rating">
    		<legend>Please rate:</legend>
    		<input type="radio" id="star5" name="rating" value="5" /><label for="star5" onclick="rating(5)" title="Rocks!">&#9733;</label>
    		<input type="radio" id="star4" name="rating" value="4" /><label for="star4" onclick="rating(4)" title="Pretty good">&#9733;</label>
    		<input type="radio" id="star3" name="rating" value="3" /><label for="star3" onclick="rating(3)" title="Meh">&#9733;</label>
    		<input type="radio" id="star2" name="rating" value="2" /><label for="star2" onclick="rating(2)" title="Kinda bad">&#9733;</label>
    		<input type="radio" id="star1" name="rating" value="1" /><label for="star1" onclick="rating(1)" title="Sucks big time">&#9733;</label>
    		
	</fieldset>
	<input type="hidden" name="usrIDr" id="usrIDr" />
        <input type="hidden" name="midr" id="midr" />
        
	<br><span id = "yr"><span class = "col2">Your Rating :</span><span class = "col1"> <?php if(isset($_SESSION['UserID'])) {
	if(mysql_numrows(mysql_query('SELECT rating FROM Rating WHERE mID = ' . $row['mID'] . ' AND UserID = ' . $_SESSION["UserID"], $db))==1)	
		echo mysql_fetch_assoc(mysql_query('SELECT rating FROM Rating WHERE mID = ' . $row['mID'] . ' AND UserID = ' . $_SESSION["UserID"], $db))["rating"]; else echo "UR";}?> / 5</span></span><br>
	
	<input type="Submit" class="btn2" id = "butr"/>
	<p style = "color : grey; font-size:10px" id="alertr"> </p>
	</form>
	<br>
	<div class="head2">Comments</div>
	<br>	
	<div style = "background-color:white;border-width:5; border-style:solid; padding-left: 20px;  padding-top: 15px;padding-right=15px; border-color:#ff3300; width:665px; height:450px; left:5px; overflow:auto">
	<form method="post" action="addComment.php">
           <textarea name="comments" id="comments" cols="61" rows="5" class="html-text-box" placeholder="Your Thoughts about the Film..."></textarea>
           <br>
           <input style="position:relative; left:490px;" id="sub" type="submit" value="Submit Comment" class="btn2"/>
           <input type="hidden" name="usrID" id="usrID" />
           <input type="hidden" name="mid" id="mid" />
	</form>
	<?php //Obtain comments
		//1. Get user's if any
		//2. Get 2 critics if any
		//3. Get 2 latest audiences if any
		$num = 0;
		if(isset($_SESSION["UserID"])) {
			$result1 = mysql_query("SELECT * FROM Comment WHERE mID = '" . $row['mID'] . "' AND UserID = '" . $_SESSION['UserID'] ."'", $db);
			$num += mysql_numrows($result1);
			$result2 = mysql_query("SELECT Users.Name, Comment.Comment FROM Comment INNER JOIN Users ON Users.UserID = Comment.UserID WHERE mID = " . $row['mID'] . " AND Current_Status = 'Critic' AND NOT(Comment.UserID = " . $_SESSION['UserID'] . ") ORDER BY Time DESC LIMIT 0, 2", $db);
			$num += mysql_numrows($result2);
			$result3 = mysql_query("SELECT Users.Name, Comment.Comment FROM Comment INNER JOIN Users ON Users.UserID = Comment.UserID WHERE mID = " . $row['mID'] . " AND Current_Status = 'Audience' AND NOT(Comment.UserID = " . $_SESSION['UserID'] . ") ORDER BY Time DESC LIMIT 0, ". (5-$num), $db);
		}
		else
		{
			$result2 = mysql_query("SELECT Users.Name, Comment.Comment FROM Comment INNER JOIN Users ON Users.UserID = Comment.UserID WHERE mID = " . $row['mID'] . " AND Current_Status = 'Critic' ORDER BY Time DESC LIMIT 0, 2", $db);
			$num += mysql_numrows($result2);
			$result3 = mysql_query("SELECT Users.Name, Comment.Comment FROM Comment INNER JOIN Users ON Users.UserID = Comment.UserID WHERE mID = " . $row['mID'] . " AND Current_Status = 'Audience' ORDER BY Time DESC LIMIT 0, ". (5-$num), $db);
		}
		if(isset($result1))
		{
			while($comment = mysql_fetch_assoc($result1))
			{
				echo("<div class='myName' style='font-size : 16px; margin-left:10px'>" . $_SESSION["Name"] . "</div>");
				echo("<div class='comments' style='font-size : 16px; margin-left:25px; margin-right : 25px'>" . $comment["Comment"] . "</div><hr>");
			}
		}
		while($comment = mysql_fetch_assoc($result2))
		{
			echo("<div class='commentName' style='font-size : 16px; margin-left:10px'>" . $comment["Name"] . " (CRITIC REVIEW)</div>");
			echo("<div class='comments' style='font-size : 16px; margin-left:25px; margin-right : 25px'>" . $comment["Comment"] . "</div><hr>");
		}
		while($comment = mysql_fetch_assoc($result3))
		{
			echo("<div class='commentName' style='font-size : 16px; margin-left:10px'>" . $comment["Name"] . "</div>");
			echo("<div class='comments' style='font-size : 16px; margin-left:25px; margin-right : 25px'>" . $comment["Comment"] . "</div><hr>");
		}	
	?>
	</div>
	</div>
	<script>
		var user = "<?php if(isset($_SESSION['Name'])) echo $_SESSION['Name']; else echo('Null') ?>";
		var userID = "<?php if(isset($_SESSION['UserID'])) echo $_SESSION['UserID']; else echo(0) ?>";
		var mID = "<?php echo $row['mID']?>"
		document.getElementById("usrID").value = userID;
		document.getElementById("mid").value = mID;
		document.getElementById("usrIDr").value = userID;
		document.getElementById("midr").value = mID;
		document.getElementById("comments").value = "";
		if(user.localeCompare("Null") == 0)
		{
			document.getElementById("comments").readOnly = true;
			document.getElementById("sub").disabled = true;
			document.getElementById("butr").disabled = true;
			document.getElementById("comments").onclick = function(){ alert("Kindly login to comment")};
			document.getElementById("alertr").innerHTML = "*Kindly login to Rate";
			document.getElementById("yr").innerHTML = "";
		}			
	</script>

</body>
</html>
