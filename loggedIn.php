<?php
	// Start the session
	session_start();
?>
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
   color: white;
   padding:8px;
   margin-bottom:20px;
   width:280px;
   }
.form-field:focus {
   background: #fff;
   color:white;
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

	<div  style="background-color:rgba(128,128,128,0.05); width:345px;margin-left:450px;margin-top:180px">
	<img style = "margin-left: 115px" src="Images/logo.png" width="100" height="100" />
	</div>
	<div class="form-container" method="post" action = "validate.php">
	<p class="form-title" align = "center">Successfully Logged In! </p> <br>
	<label><a href="http://localhost/WT Assignment"style="color:white">Click here to go to main page</a></label>
	</div>
</body>
</html>
