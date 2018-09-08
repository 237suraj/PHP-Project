<?php
include_once("Connection.php");
$uname=$_POST["UN"];
$pass=$_POST["PS"];

$sql = "SELECT * from login WHERE Username=:user and Password=:pass ";
$stmt = $con->prepare($sql);
$stmt->bindParam(':user',$uname);
$stmt->bindParam(':pass',$pass);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if($row['Username']!=NULL && $row['Password']!=NULL)
{
	
	$_SESSION['username']=$row['Username'];
	header("Location:adminhome.php");
	
}
else
{
	$_SESSION['MSG']="Invalid Username or Passward";
	header("Location:index.php");
}
?>
