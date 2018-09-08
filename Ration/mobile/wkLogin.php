<?php
include_once("connection.php");
//$uname="suraj";
$uname=$_POST["username"];
//$pass="shinde";
$pass=$_POST["password"];
$sql = "SELECT * from login WHERE Username=:user and Password=:pass and Status =1 ";
$stmt = $con->prepare($sql);
$stmt->bindParam(':user',$uname);
$stmt->bindParam(':pass',$pass);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	$json_output[]=$row;
	print(json_encode($json_output));
}
?>
