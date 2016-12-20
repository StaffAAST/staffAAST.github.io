<?php
session_start();
if(isset($_SESSION['FAV'])){}
else{die('ERROR');}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div id="Header">
  <ul id="Nav">
		<li ><a href="newhome.php"><h1>HOME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp </h1></a></li>
			
			<li > <a href="newlogin.php " ><h1>LOG OUT</h1></a></li>
			
		</ul>
		
  <br/>
<br/>
<br/>
<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><p>
<button class="B" type="button" onclick="location.href='addstudent2.php'">Add Student</button>&nbsp &nbsp 
<button class="B" type ="button" onclick="location.href='addemp.php'">Add Professor</button> &nbsp &nbsp
<button class="B" type ="button" onclick="location.href='addco.php'">Add a course to a student</button> &nbsp &nbsp



</p>













</html>