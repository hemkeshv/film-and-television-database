<html>
<head>
<style>

.form-container {
   border: 2px solid #f2e3d2;
   
   background-color:rgba(20,127,199,0.1);
   background-image: -ms-linear-gradient(top, #e6a561 0%, #c9b7a2 100%);
   border-radius: 13px;
   font-family: 'Helvetica Neue',Helvetica,sans-serif;
   text-decoration: none;
   vertical-align: middle;
   min-width:300px;
   padding:20px;
   width:300px;
   margin-top:0px;
   margin-left:450px;
   
   }
.form-field {
   border: 1px solid #c9b7a2;
   background: #e4d5c3;
   border-radius: 6px;
   color: black;
   padding:8px;
   margin-bottom:20px;
   margin-right:10px;
   width:162px;
   }
.form-field:focus {
   background: #fff;
   color:black;
   }
.form-container h2 {
   text-shadow: #fdf2e4 0 1px 0;
   font-size:18px;
   margin: 0 0 10px 0;
   font-weight:bold;
   text-align:center;
   
    }
.form-title {
   margin-bottom:10px;
   color:white;
   
   font-weight:bold;
   }
.submit-container {
   margin:4px 0;
   text-align:center;
   }
.submit-button {
   border: 1px solid #121411;
   background: #0000FF;
   align : center;
   background-image: -ms-linear-gradient(top, #1c12b3 0%, #37a198 100%);
   -webkit-border-radius: 4px;
   -moz-border-radius: 4px;
   border-radius: 4px;
  
   color: #FFFFFF;
   font-family: helvetica, serif;
   padding: 8.5px 18px;
   font-size: 18px;
   text-decoration: none;
   horizontal-align: middle;
   }
.submit-button:hover {
   border: 1px solid #447314;
   
   background:#FF6600;
   background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
   color: #FFFFFF;
   
   }
.submit-button:active {
  
   border: 1px solid #447314;
   background: #0000FF;
   background-image: -ms-linear-gradient(top, #6aa436 0%, #8dc059 100%);
   color: #FFFFFF;
   }
 </style>
</head>
<body background="Images/multi.jpg" >
	<div  style="background-color:rgba(128,128,128,0.05); width:345px;margin-left:450px;margin-top:15px">
	<img style = "margin-left: 115px" src="Images/logo.png" width="100" height="100" />
	</div>
	<?php 	if(isset($_GET["duplicate"]))
		{
			echo("<p class='form-title' style='font-style:italic;' align = 'center'>Username already exists! Try another username!</p>");
		}
	
	?>
	<form class="form-container" method="post" action = "validate.php">
	<div class="form-title">
	 <br><h2>Sign Up Here</h2></div>
	<span class="form-title">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" class="form-field"  /></span><br>

	<span class="form-title">Age : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="age" min = "1" class="form-field" /></span><br>
	<span class="form-title">Username : <input type="text" name="uname" class="form-field" /></span><br>
	<span class="form-title">Password :&nbsp; <input type="password" name="pass" id="pw1" class="form-field" /></span><br>
	<span class="form-title">Re-enter <br> Password :&nbsp; <input type="password" id="pw2" class="form-field" onchange="check()" "/></span><br>
	<p id = "checker" class="form-title" style='font-style:italic;'> </p><br>
	<span class="form-title">Sign Up as :&nbsp; <input type="radio" value="Audience" name="r" >Audience</input>&nbsp;<input type="radio" value="Critic" name="r">Critic</input></span><br>
	<br>
	<span class="form-title"><u>Note:</u> User signed up as a Critic will remain as Audience until approved by the Administrator.</span><br><br>
	<input type="submit" style="margin-left:100px;" class="submit-button" value="Sign Up" /><br>
</form>
<script>
	document.getElementById("pw2").addEventListener("focus", clear);
	function check()
	{
		
		if(document.getElementById("pw1").value.localeCompare(document.getElementById("pw2").value) != 0)
			document.getElementById("checker").innerHTML = "Passwords do not match";
	}
	function clear()
	{
		document.getElementById("checker").innerHTML = "";
	}
</script>		
</body>
</html>
