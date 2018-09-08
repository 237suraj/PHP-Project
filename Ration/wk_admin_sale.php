<?php
include_once("Connection.php");
$cid=$_POST['cid'];
$vid=$_POST['vid'];
$regno=$_POST['regno'];
$dt=$_POST['date'];
$orderno=$_POST['orderno'];
$item=$_POST['item'];
$qut=$_POST['quantity'];
$rt=$_POST['rate'];
$am=$_POST['amount'];

$qry1="select Item_id from item where Item_name=:item ";
$stmt1= $con->prepare($qry1);
$stmt1->bindValue(":item",$item);
$stmt1->execute();
$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
$itemid=$row1['Item_id'];


	$str = "insert into adminsale(Date,Item_id, Quantity,Rate,Amount,Reg_no,Order_no)values(:dt,:it,:qut,:rt,:am,:regno,:order)";
	$stmt= $con->prepare($str);
	$stmt->bindValue(":dt",$dt);
	$stmt->bindValue(":it",$itemid);
	$stmt->bindValue(":qut",$qut);
	$stmt->bindValue(":rt",$rt);
	$stmt->bindValue(":am",$am);
	$stmt->bindValue(":regno",$regno);
	$stmt->bindValue(":order",$orderno);
	$stmt->execute();

	$str2 = "update distpurchase set Remark=1 where Order_no=:order";
	$stmt2= $con->prepare($str2);
	$stmt2->bindValue(":order",$orderno);
	$stmt2->execute();

	echo "<script> alert('Sale Successfully....!!'); </script>";
	header("refresh:0;url=admin_sale.php");

	
?>