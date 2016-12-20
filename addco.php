<?PHP
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



<h1>Add Course to Student</h1><div class="city" >
<form name="addcourse" action="addcourse.php" onsubmit="return validate()" method="post">
 <h3>Student ID: <input id="sid" type="text" name="s_id"></h3>
  <h3> Course :<input  type="radio" name="course" value="2" checked> Data base</br>
           <input type="radio" name="course" value="1"> Web programming<h3>
<br/>
<input type="submit" name="add" value="Add Course">
</form>
</div>

</body>
</html>