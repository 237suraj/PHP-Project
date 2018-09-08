<?php
include_once("Connection.php");
$name=$_POST['name'];
$str = "select * from item";
$stmt= $con->prepare($str);
$stmt->execute();
$count=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	if($row['Item_name']==$name)
	{
		$count=1;
	}
}
if($count==1)
{
	$str="update item set Status=1 where Item_name=:name";
	$stmt1= $con->prepare($str);
	$stmt1->bindValue(":name",$name);
	$stmt1->execute();
}
else
{
	$str="insert into item(Item_name)values(:name)";
	$stmt2= $con->prepare($str);
	$stmt2->bindValue(":name",$name);
	$stmt2->execute();
}
	header("location:item.php");
?>