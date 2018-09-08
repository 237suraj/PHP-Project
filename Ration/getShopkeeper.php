<option value="0">- Select Shop Name -</option>
<?php require_once("connection.php");
$vid=$_GET["vid"];
$sql="select Shop_name,Reg_no from login where Village_id=:vid and STATUS=1"; 
$stmt = $con->prepare($sql);
$stmt->bindParam(':vid',$vid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
	<option value="<?php echo $row["Reg_no"];?>"><?php echo $row["Shop_name"];?> </option>
<?php
}
?>