<?php
	$name = $_POST['Scheme_name'];
	$vd = $_POST['Validity_date'];
	$id =$_POST['si2'];
	include_once("Connection.php");
	$sql = "update scheme set Status=0";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	header("Location:scheme.php");  
?>