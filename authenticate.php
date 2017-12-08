<?php
	// Start the session
	session_start();
?>
<html>
<body>
<?php
	 $db = mysql_connect("localhost","jeevan","jeevan"); 
	 if (!$db) {
	 die("Database connection failed miserably: " . mysql_error());
	 }
	 $db_select = mysql_select_db("ftdb",$db);
	 if (!$db_select) {
	 die("Database selection also failed miserably: " . mysql_error());
	 }
	 $result = mysql_query('SELECT * FROM Users WHERE Username LIKE "'.($_POST["uname"]) .'" AND BINARY Password LIKE "' . ($_POST["pass"]) . '"', $db);
	 if (!$result) {
	 die("Database query failed: " . mysql_error());
	 }
	 $num=mysql_numrows($result);
	 if($num == 1)
	 {
	 	
	 	$result = mysql_fetch_assoc($result);
	 	$_SESSION["Name"] = $result['Name'];
	 	$_SESSION["Username"] = $result['Username'];
	 	$_SESSION["UserID"] = $result['UserID'];
	 	mysql_close();
	 	echo("<script>window.location='http://localhost/WT Assignment/loggedIn.php'</script>");
	 		 	
	 }
	 else
	 {
	 	mysql_close();
	 	echo("<script>window.location='http://localhost/WT Assignment/login.php?failed=true'</script>");
	 	
	 }
	 
?>
</body>
</html>
