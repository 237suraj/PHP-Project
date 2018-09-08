<?php
	$name = $_POST['name'];
	$id = $_POST['id'];
	$vid = $_POST['vid'];
	$count=0;
	include_once("connection.php");
	$qry="select * from village";
	$stmt = $con->prepare($qry);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if($row['Village_id']==$vid)
		{
			$count=1;
		}
	}
	if($count==0)
	{
		$sql = "update village set Village_name=:name,Circle_id = :id,Flag = 1 where Village_id=:vid" ;
		$stmt = $con->prepare($sql);
		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":id",$id);
		$stmt->bindParam(":vid",$vid);
		$stmt->execute();
	}
	else
	{
		echo "<script> alert('Village name already exist Circle') </script>";
		
	}
	header("refresh:0;url=village.php");  
?>