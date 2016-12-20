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
$var4=$_POST['faculty'];


$db=mysqli_connect('localhost','root','root','aast') or die ('Error connecting to mysaql server');


$stmt=$db->prepare("INSERT INTO student (stu_first_name,stu_last_name,stu_email,stu_mobile,stu_faculty) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssii",$var0,$var1,$var2,$var3,$var4);
$stmt->execute();

$stmt->close();
mysqli_close($db);
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

<h1>THE STUDENT IS SAVED</h1>







</html>
