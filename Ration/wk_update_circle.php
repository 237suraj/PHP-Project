<?php
	$name = $_POST['name'];
	$id = $_POST['id'];
	$count=0;
	include_once("connection.php");
	$qry="select * from circle";
	$stmt = $con->prepare($qry);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if($row['Circle_name']==$name)
		{
			$count=1;
		}
	}
	if($count==0)
	{
		$sql = "update circle set Circle_name=:name and Flag = 1 where Circle_id = :id";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
	}
	else
	{
		echo "<script> alert('Circle name already exist') </script>";
		
	}
	header("refresh:0;url=circle.php");
	  
?>