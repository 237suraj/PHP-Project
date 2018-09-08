<?php
include_once("Connection.php");
$vid=$_POST['vid'];
$cno=$_POST['cardno'];
$name=$_POST['name'];
$ano=$_POST['ano'];
$adult=$_POST['Adult'];
$child=$_POST['Child'];
$total=$_POST['total'];
$id=$_POST['ctypeid'];
$gas=$_POST['gas'];

$str = "select * from card";
$stmt= $con->prepare($str);
$stmt->execute();
$count=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	if($row['Card_no']==$name)
	{
		$count=1;
	}
}
if($count==1)
{
	$str="update card set Status=1 and Flag = 1 where Card_no=:cno";
	$stmt1= $con->prepare($str);
	$stmt1->bindValue(":cno",$cno);
	$stmt1->execute();
}
else
{
	$str="insert into card(Village_id,Card_no,Name,Adhar_no,Adult,Child,Total_unit,Ctype_id,Gas_con)
			values(:vid,:cno,:name,:ano,:adult,:child,:total,:cid,:gas)";
	$stmt2= $con->prepare($str);
	$stmt2->bindParam(":vid",$vid);
	$stmt2->bindParam(":cno",$cno);
	$stmt2->bindParam(":name",$name);
	$stmt2->bindParam(":ano",$ano);
	$stmt2->bindParam(":adult",$adult);
	$stmt2->bindParam(":child",$child);
	$stmt2->bindParam(":total",$total);
	$stmt2->bindParam(":cid",$id);
	$stmt2->bindParam(":gas",$gas);
	$stmt2->execute();
}
	header("location:card.php");
?>