<?php
	$name = $_POST['name'];
	$id = $_POST['id'];
	$count=0;
	include_once("connection.php");
	$qry="select * from item";
	$stmt = $con->prepare($qry);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if($row['Item_name']==$name)
		{
			$count=1;
		}
	}
	if($count==0)
	{
		$sql = "update item set Item_name=:name where Item_id = :id";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
	}
	else
	{
		echo "<script> alert('Item name already exist') </script>";
		
	}
	header("refresh:0;url=item.php");
?>