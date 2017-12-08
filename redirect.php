<?php
	 $db = mysql_connect("localhost","jeevan","jeevan"); 
	 if (!$db) {
	 die("Database connection failed miserably: " . mysql_error());
	 }
	 $db_select = mysql_select_db("ftdb",$db);
	 if (!$db_select) {
	 die("Database selection also failed miserably: " . mysql_error());
	 }
	 $result = mysql_query('SELECT title, year, director, productionHouse FROM Movie WHERE CONCAT(title, year, plot, director, productionHouse) LIKE "%'.($_GET["searchKey"]) .'%"', $db);
	 if (!$result) {
	 die("Database query failed: " . mysql_error());
	 }
	 $num=mysql_numrows($result);
	 mysql_close();
	 if($num == 1)
	 {
	 	echo("<script>window.location='http://localhost/WT Assignment/movieTemplate.php?key=". $_GET["searchKey"]."'</script>");
	 }
	 else
	 {
	 	echo("<script>window.location='http://localhost/WT Assignment/search.php?search=".$_GET["searchKey"]."'</script>");
	 }
	 
?>

