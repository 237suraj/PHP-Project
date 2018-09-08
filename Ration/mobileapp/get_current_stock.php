<?php session_start();
	include_once("Connection.php");
	$did='273';//$_GET["sid"];
	$qry1="SELECT A.Item_id AS itemid, i.item_name, CASE WHEN SUM(TOT_QTY) < 0 THEN '0' ELSE SUM(TOT_QTY) END AS newstock FROM ( SELECT Reg_no, Item_id, sum(Quantity) AS TOT_QTY FROM distpurchase WHERE Reg_no=:d1 GROUP BY Item_id UNION ALL SELECT Dist_id, Item_id, -sum(Quantity) AS TOT_QTY FROM distsale WHERE Dist_id=:d2 GROUP BY Item_id )a, item i WHERE Reg_no =:d3 AND i.Item_id = a.item_id GROUP BY a.item_id";
	$stmt1 = $con->prepare($qry1);
	$stmt1 -> bindParam(":d1",$did);
	$stmt1 -> bindParam(":d2",$did);
	$stmt1 -> bindParam(":d3",$did);
	$stmt1 -> execute();
	while($row=$stmt1->fetch(PDO::FETCH_ASSOC))
	{
		$json_output[]=$row;
	}
		print(json_encode($json_output));	
?>