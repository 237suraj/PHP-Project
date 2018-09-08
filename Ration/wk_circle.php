<?php
include_once("Connection.php");
$name=$_POST['name'];
$str = "select * from circle";
$stmt= $con->prepare($str);
$stmt->execute();
$count=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	if($row['Circle_name']==$name)
	{
		$count=1;
	}
}
if($count==1)
{
	$str1="update circle set Status=1 and Flag = 1 where Circle_name=:name";
	$stmt1= $con->prepare($str1);
	$stmt1->bindValue(":name",$name);
	$stmt1->execute();
}
else
{
	$str2="insert into circle(Circle_name)values(:name)";
	$stmt2= $con->prepare($str2);
	$stmt2->bindValue(":name",$name);
	$stmt2->execute();
}
	header("location:circle.php");
?>