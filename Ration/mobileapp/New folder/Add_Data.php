<?php 
include_once("Connection.php");
$name=$_POST['NAME'];
$mb=$_POST['MOBILE'];
$query="INSERT INTO demo(name, mobile) VALUES (:name,:mb)";

	$stmt=$con->prepare($query);
	$stmt->bindParam(":name",$name);
	$stmt->bindParam(":mb",$mb);
	if($stmt->execute())
	{
		$json_output[]=array('status'=>'true');
		print(json_encode($json_output));
	}
	else
	{
		$json_output[]=array('status'=>'false');
		print(json_encode($json_output));
	}
?>