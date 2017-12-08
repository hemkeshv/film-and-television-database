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
	 $result = mysql_query('SELECT * FROM Users WHERE Username LIKE "'.($_POST["uname"]) .'"', $db);
	 if (!$result) {
	 die("Database query failed: " . mysql_error());
	 }
	 $num=mysql_numrows($result);
	 if($num >= 1)
	 {
	 	mysql_close();
	 	echo("<script>window.location='http://localhost/WT Assignment/signup.php?duplicate=true'</script>");
	 }
	 else
	 {
	 	$name = $_POST['name'];
	 	$age = $_POST['age'];
	 	$uname = $_POST['uname'];
	 	$pass = $_POST['pass'];
	 	$type = $_POST['r']; 
	 	$sql = "INSERT INTO Users (Name, Age, Username, Password, Applied_Status) VALUES ('$name', $age, '$uname', '$pass', '$type')";
	 	$result = mysql_query($sql, $db);
	 	if (!$result) {
	 		die("Database query failed: " . mysql_error());
	 	}
	 	echo("<script>window.location='http://localhost/WT Assignment/success.html'</script>");
	 	mysql_close();		
	 }
	 
?>
</body>
</html>
