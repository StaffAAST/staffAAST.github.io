<?php
session_start();
if(isset($_SESSION['FAV'])){}
else{die('ERROR');}

?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
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

<h2>Student Info </h2>
<div class="city">

<form name="addstudent" action="addstudphp.php" onsubmit="return validate()" method="post">

<h3>First Name:<input id="s1" type="text" name="fn"></h3>
 <h3>Last Name:<input id="s2" type="text" name="ln"></h3>
<h3>email :<input id="s3" type="text" name="em"></h3>
 <h3>Phone :<input id="s4" type="text" name="ph"></h3>
  
 <h3> Faculty :</h3><input type="radio" name="faculty" value="1" checked>Computer Science<br/>
           <input type="radio" name="faculty" value="2"> Engineering<br>

  

<br>
<br>	  
<input type="submit" name="add" value="Add Student">
</form>
</div>

</body>
</html>