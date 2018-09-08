<?php
include_once("Connection.php");
$d=$_POST['Date'];
$id=$_POST['Item_id'];
$q=$_POST['Quantity'];
$r=$_POST['Rate'];
$a=$_POST['Amount'];
$c=$_POST['Card_no'];
$di=$_POST['Distid'];
$diff=$_POST['Difference'];
$str = "insert into distsale(Date,Item_id,Quantity,Rate,Amount,Card_no,Dist_id,Difference)values(:d,:id,:q,:r,:a,:c,:di,:diff)";
$stmt= $con->prepare($str);
$stmt->bindValue(":d",$d);
$stmt->bindValue(":id",$id);
$stmt->bindValue(":q",$q);
$stmt->bindValue(":r",$r);
$stmt->bindValue(":a",$a);
$stmt->bindValue(":c",$c);
$stmt->bindValue(":di",$di);
$stmt->bindValue(":diff",$diff);
if($stmt->execute())
{
	header("location:dist_sale.php");
	}
	else
	{
	echo "process fail";
	}
	?>
