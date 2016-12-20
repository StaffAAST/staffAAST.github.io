<?PHP
session_start();
if(isset($_SESSION['FAV'])){}
else{die('ERROR');}
?>
<?php
$var0=$_POST['fn'];
$var1=$_POST['ln'];
$var2=$_POST['em'];
$var3=$_POST['ph'];

$db=mysqli_connect('localhost','root','root','aast') or die ('Error connecting to mysaql server');


$stmt=$db->prepare("INSERT INTO employee (emp_first_name,emp_last_name,emp_email,emp_mobile) VALUES (?,?,?,?)");
$stmt->bind_param("sssi",$var0,$var1,$var2,$var3);
$stmt->execute();

$stmt->close();
mysqli_close($db);
?>
<html>
</
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

<h1>THE PROFESSOR IS SAVED</h1>







</html>
