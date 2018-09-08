<?php
		include_once("connection.php");
		$id=$_GET['id'];
		$sql = "update rate set Status=0 and Flag = 1 where Rate_id=:id";
		$stmt= $con->prepare($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		header("Location:rate.php");
 ?>