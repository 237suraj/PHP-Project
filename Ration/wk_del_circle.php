<?php
		include_once("connection.php");
		$id=$_GET['id'];
		$sql = "update circle set Status=0 where Circle_id=:id";
		$stmt= $con->prepare($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		header("Location:circle.php");
 ?>