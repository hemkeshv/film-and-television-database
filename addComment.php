<?php
	// Start the session
	session_start();
?>
<html>
<body>
<?php
	if (strcmp($_POST["comments"], "") == 0)
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
		 if(mysql_numrows(mysql_query("SELECT * FROM Comment WHERE mID = '" . ($_POST["mid"]) . "' AND UserID = '" . ($_POST["usrID"]) ."'", $db)) == 1)
		{
		 	$sql = "UPDATE Comment SET Comment = '" . $_POST["comments"] . "' WHERE  mID = " . ($_POST["mid"]) . " AND UserID = " . ($_POST["usrID"]);
		 	mysql_query($sql, $db);
		 }
		 else
		 {
		 	$sql = "INSERT INTO Comment (mID, UserID, Comment) VALUES ( " . ($_POST["mid"]) . "," . ($_POST["usrID"]) . ", '" . ($_POST["comments"]) . "')";
		 	mysql_query($sql, $db);
		 }
		 	
		 mysql_close();
	}
	 echo("<script>window.history.back();</script>");
?>
</body>
</html>
