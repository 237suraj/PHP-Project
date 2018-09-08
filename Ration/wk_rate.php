<?php 
	$cardid = $_POST['ctype'];
	$itemid = $_POST['item'];
	$rate = $_POST['rate'];
	$count=0;
	include_once("Connection.php");
	$qry="select * from rate";
	$stmt = $con->prepare($qry);
	$stmt->execute();
		
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if(($row['Card_id']==$cardid)&&($row['Item_id']==$itemid))
		{
			$count=1;
		}
	}

	if($count==0)
	{	
		$str2="insert into rate(Ctype_id,Item_id,Rate)values(:cid,:id,:rate)";
		$stmt2= $con->prepare($str2);	
		$stmt2->bindValue(":cid",$cardid);
		$stmt2->bindValue(":id",$itemid);
		$stmt2->bindValue(":rate",$rate);
		$stmt2->execute();
	}
	else
	{
		$str1="update rate set Status=1 where Ctype_id=:cid and Item_id=:id";
		$stmt1= $con->prepare($str1);
		$stmt1->bindValue(":cid",$cardid);
		$stmt1->bindValue(":id",$itemid);
		$stmt1->execute();
	}
	header("location:rate.php");
?>