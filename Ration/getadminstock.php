<?php session_start();
	include_once("Connection.php");
	$frmdate=$_GET["fd"];
	$todate=$_GET["td"];
	$qry1="SELECT A.Item_id AS itemid, SUM(TOT_QTY) AS STOCK FROM ( select Item_id, sum(Quantity) tot_qty, 'PUR' as TYP from adminpurchase where date >=:fd and date <=:td group by Item_id UNION ALL  select Item_id, -sum(Quantity) tot_qty , 'SAL' as TYP from adminsale where date >=:fd1 and date <=:td1  group by Item_id ) A GROUP BY Item_id";
	$stmt1 = $con->prepare($qry1);
	$stmt1 -> bindParam(":fd",$frmdate);
	$stmt1 -> bindParam(":td",$todate);
	$stmt1 -> bindParam(":fd1",$frmdate);
	$stmt1 -> bindParam(":td1",$todate);
	$stmt1 -> execute();
	while($row=$stmt1->fetch(PDO::FETCH_ASSOC))
	{
	$stock = $row['STOCK'];
	if($row!=NULL)
	{
	$qr="SELECT Item_name from item where Item_id=:ic";
	$stmt2 = $con->prepare($qr);
	$stmt2 -> bindParam(":ic",$row['itemid']);
	$stmt2 -> execute();
	$r=$stmt2->fetch(PDO::FETCH_ASSOC);
	if($stock<0){
		$stock=0;
	}
	?>  
    	<tr align="center"><td width="150px;"><? echo $row['itemid'];?></td><td width="150px;"><? echo $r['Item_name'];?></td><td width="150px;"><? echo $stock;?></td></tr>
        <? }
		
		else{
			$_SESSION['ERR']="Select valid date";
		} } ?>