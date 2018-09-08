<?php
	$id =$_GET['si'];
	include_once("Connection.php");
	$sql = "update scheme set Status=0 where Scheme_id=:id";
	$stmt = $con->prepare($sql);
	$stmt->bindParam(":id",$id);
	$stmt->execute();
	header("Location:scheme.php");  
?>