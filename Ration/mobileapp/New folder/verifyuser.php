<?php
include_once("Connection.php");
$uname=$_POST["UN"];
$pass=$_POST["PS"];
$hasval=0;
$sql = "SELECT Reg_no, User_type, Shop_name from login WHERE Username=:user and Password=:pass ";
$stmt = $con->prepare($sql);
$stmt->bindParam(':user',$uname);
$stmt->bindParam(':pass',$pass);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	$hasval=1;
	$json_output[]=$row;
}
if($hasval==0)
{
	$json_output[]=array('Reg_no'=>'0', 'User_type'=>'-1', 'Shop_name'=>'Invalid');
	print(json_encode($json_output));
}			
else
{		
	print(json_encode($json_output));
}

?>
