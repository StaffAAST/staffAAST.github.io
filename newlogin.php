

<?php
session_start();

$_SESSION['FAV']="GREEN";

?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<center>
<img class="displayed" id="bg" src="header.jpg" width="1200" alt="header">
<div class="city">

<form name="myForm" action="home.php" method="post">
<h2>Login Form</h2></br></br>
<h3>Username: <input type="text" name="user"><br/><br/>
Password: <input type="Password" name="pass">
<br/><br/><br/>
<input type="submit" value="Log in"></h3>
</form>
</div>
</body></center>
</html>