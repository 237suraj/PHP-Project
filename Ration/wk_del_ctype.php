<?php
		include_once("connection.php");
		$id=$_GET['id'];
		$sql = "update cardtype set Status=0 where Ctype_id=:id";
		$stmt= $con->prepare($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		header("Location:cardtype.php");
 ?>