<?php
		include_once("connection.php");
		$id=$_GET['id'];
		$sql = "update village set Status=0 where Village_id=:id";
		$stmt= $con->prepare($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		header("Location:village.php");
 ?>