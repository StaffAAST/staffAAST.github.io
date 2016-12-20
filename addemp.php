<?PHP
session_start();
if(isset($_SESSION['FAV'])){}
else{die('ERROR');}
?>

<!DOCTYPE html>
<html>
<head>

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
<h1>Professor Info </h1><div class="city" >
<form name="addemployee" action="addemployee.php" onsubmit="return validate()"  method="post">
<h3>First Name: <input type="text" name="fn"></h3>
 <h3>Last Name: <input type="text" name="ln"></h3>
<h3>email : <input type="text" name="em"></h3>
 <h3>Phone: <input type="text" name="ph"></h3>
   <br/>
   <br/>
<input type="submit" name="add" value="Add Professor">
</form>
</div>

</body>
</html>