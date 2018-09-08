<?php session_start();
include_once("Connection.php");
$uname=$_POST["username"];
$pass=$_POST["password"];

$sql = "SELECT * from login WHERE Username=:user and Password=:pass and Status = 1 ";
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
	echo "<script> alert('Invalid Username or Passward');</script>";
	header("refresh:0;url=index.php");
}
?>
