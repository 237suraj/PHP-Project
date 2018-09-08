<?php
include_once("Connection.php");
$d=$_POST['Date'];
$id=$_POST['id'];
$q=$_POST['quantity'];
$r=$_POST['rate'];
$a=$_POST['amount'];
$str = "insert into adminpurchase(Date,Item_id,Quantity,Rate,Amount)values(:d,:id,:q,:r,:a)";
$stmt= $con->prepare($str);
$stmt->bindParam(":d",$d);
$stmt->bindParam(":id",$id);	
$stmt->bindParam(":q",$q);
$stmt->bindParam(":r",$r);
$stmt->bindParam(":a",$a);
if($stmt->execute())
{
		header("location:admin_purchase.php");
}
else{
		echo "process fail";
}
?>