<?PHP
session_start();
if(isset($_SESSION['FAV'])){}
else{die('ERROR');}
?>
<?php
$var0=$_POST['s_id'];
$var1=$_POST['course'];



$db=mysqli_connect('localhost','root','root','aast') or die ('Error connecting to mysaql server');


$stmt=$db->prepare("INSERT INTO stud_cour (fkstd_id,fkcou_id) VALUES (?,?)");
$stmt->bind_param("ii",$var0,$var1);
$stmt->execute();

$stmt->close();
mysqli_close($db);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<style>
.city {    float: left;    margin: 5px;    padding: 15px;    max-width: 300px;    height: 300px;    border: 1px solid black;}
</style>

</head>
<body>

  <div id="Header" class="rscourse">
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

<h1>THE COURSE IS SAVED TO THAT STUDENT</h1>

</html>
