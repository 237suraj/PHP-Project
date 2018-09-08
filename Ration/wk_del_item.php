<?php
		include_once("connection.php");
		$id=$_GET['id'];
		$sql = "update item set Status=0 and Flag = 1 where Item_id=:id";
		$stmt= $con->prepare($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		header("Location:item.php");
 ?>