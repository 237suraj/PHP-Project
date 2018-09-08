<?php
include_once("Connection.php");
$sn=$_POST['Scheme_name'];
$vd=$_POST['Validity_date'];

$filetoupload = basename($_FILES['uploaddoc']['name']);
$dt=date("YmdHis");
$exp=explode(".",$filetoupload);
$ext=$exp[1];
$filename="S_".$dt.".".$ext;
if($ext=="docx")
{
	$uploaddir = 'doc/';
	$path= 'doc/'.$filename;
	if(move_uploaded_file($_FILES['uploaddoc']['tmp_name'],$path))
	{
		$str = "insert into scheme(Scheme_name,Description_path,Validity_date)values(:sn,:dp,:vd)";
		$stmt= $con->prepare($str);
		$stmt->bindValue(":sn",$sn);
		$stmt->bindValue(":dp",$path);
		$stmt->bindValue(":vd",$vd);
		
		if($stmt->execute())
		{
			header("location:scheme.php");
		}
		else
		{
			echo "process fail";
		}
	}
}


?>