<?php
include_once("Connection.php");
$ct=$_POST['name'];
$str = "select * from cardtype";
$stmt= $con->prepare($str);
$stmt->execute();
$count=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	if($row['Card_type']==$ct)
	{
		$count=1;
	}
}
if($count==1)
{
	$str="update cardtype set Status=1 where Card_type=:ct";
	$stmt1= $con->prepare($str);
	$stmt1->bindValue(":ct",$ct);
	$stmt1->execute();
}
else
{
	$str="insert into cardtype(Card_type)values(:ct)";
	$stmt2= $con->prepare($str);
	$stmt2->bindValue(":ct",$ct);
	$stmt2->execute();
}
	header("location:ctype.php");
?>