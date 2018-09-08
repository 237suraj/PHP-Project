<?
include_once("Connection.php");
$pq=$_POST['Pre_quantity'];
$nq=$_POST['New_quantity'];
$d=$_POST['Date'];
$str = "insert into stock (Pre_quantity) values(:pq)";
$str = "insert into stock (New_quantity) values(:nq)";
$str = "insert into stock (Date) values(:d)";
$stmt= $con->prepare($str);
$stmt->bindValue(":pq",$pq);
$stmt->bindValue(":nq",$nq);
$stmt->bindValue(":d",$d);
if($stmt->execute())
{
		header("location: stock.php");
}
else{
		echo "process fail";
}
?>