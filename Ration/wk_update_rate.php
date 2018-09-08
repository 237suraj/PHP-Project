<?php
	$name = $_POST['name'];
	$id = $_POST['id'];
	include_once("connection.php");
	$sql = "update circle set Circle_name=:name where Circle_id = :id";
	$stmt = $con->prepare($sql);
	$stmt->bindParam(":name",$name);
	$stmt->bindParam(":id",$id);
	$stmt->execute();
	header("Location:circle.php");  
?>