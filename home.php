
<?php
session_start();
//$_SESSION['FAV']="blue";


?>
<?php
$var0=$_POST['user'];
$var1=$_POST['pass'];


$db=mysqli_connect('localhost','root','root','aast') or die ('Error connecting to mysaql server');


$stmt=$db->prepare("SELECT * FROM admin WHERE (admin_user= ? and admin_pass = ?)");
$stmt->bind_param("ss",$var0,$var1);
$stmt->execute();
if($stmt!= NULL){
	header("Location: http://localhost/newhome.php");

	echo("yuppy");
}else
{die("wrong password");}

/*$query="INSERT INTO student (stu_first_name,stu_last_name,stu_email,stu_mobile,stu_faculty) VALUES ($var0,$var1,$var2,$var3,$var4)";
mysqli_query($db,$query) or die ('Error querying database.');*/

/*
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);

while($row=mysqli_fetch_array($result)){
	
	echo $row['stu_id'].'    '.$row['stu_name'].'      '.$row['stu_gpa'];
	
}*/
$stmt->close();
mysqli_close($db);
?>
