<?php
	// Start the session
	session_start();
?>
<html>
<body>
<?php
	if (!isset($_POST["rating"]))
	{
	}
	else
	{
		
		 $db = mysql_connect("localhost","jeevan","jeevan"); 
		 if (!$db) {
		 die("Database connection failed miserably: " . mysql_error());
		 }
		 $db_select = mysql_select_db("ftdb",$db);
		 if (!$db_select) {
		 die("Database selection also failed miserably: " . mysql_error());
		 }
		 if(mysql_numrows(mysql_query("SELECT * FROM Rating WHERE mID = '" . ($_POST["midr"]) . "' AND UserID = '" . ($_POST["usrIDr"]) ."'", $db)) == 1)
		{
		 	$sql = "UPDATE Rating SET Rating = " . $_POST["rating"] . " WHERE  mID = " . ($_POST["midr"]) . " AND UserID = " . ($_POST["usrIDr"]);
		 	mysql_query($sql, $db);
		 }
		 else
		 {
		 	$sql = "INSERT INTO Rating (mID, UserID, rating) VALUES ( " . ($_POST["midr"]) . "," . ($_POST["usrIDr"]) . ", '" . ($_POST["rating"]) . "')";
		 	mysql_query($sql, $db);
		 }
		 	
		 mysql_close();
	}
	 echo("<script>window.history.back();</script>");
?>
</body>
</html>
