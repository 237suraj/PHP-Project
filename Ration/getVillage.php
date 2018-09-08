<?php require_once("connection.php");
$circleid=$_GET["circleid"];
?>
<option value="0"> --Select Village-- </option>
<?php
$sql_country="select * from village where Circle_id=:circleid and STATUS=1"; 
$stmt = $con->prepare($sql_country);
$stmt->bindParam(':circleid',$circleid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	
?>
	
	<option value="<?php echo $row["Village_id"]; ?>" ><?php echo $row["Village_name"]; ?></option>
<?php
}
?>