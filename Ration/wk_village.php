<?php
include_once("Connection.php");
$id=$_POST['id'];
$name=$_POST['name'];
$count=0;
$str = "select * from village";
$stmt= $con->prepare($str);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	if(($row['Village_name']==$name)&&($row['Circle_id']==$id))
	{
		$count=1;
	}
}

if($count==0)
{	
	$str2="insert into village(Village_name,Circle_id)values(:name,:id)";
	$stmt2= $con->prepare($str2);
	$stmt2->bindValue(":name",$name);
	$stmt2->bindValue(":id",$id);
	$stmt2->execute();
}
else
{
	$str1="update village set Status=1 where Village_name=:name";
	$stmt1= $con->prepare($str1);
	$stmt1->bindValue(":name",$name);
	$stmt1->execute();
}
	header("location:village.php");
?>