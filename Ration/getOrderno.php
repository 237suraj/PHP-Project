<option value="0">- Select Order -</option>
<?php require_once("connection.php");
$regno=$_GET["regno"];
$sql="select * from distpurchase where Reg_no=:regno and Remark=0"; 
$stmt = $con->prepare($sql);
$stmt->bindParam(':regno',$regno);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>	
	<option value="<?php echo $row["Order_no"];?>"><?php echo $row["Order_no"];?> </option>
<?php
}
?>