<?php
include_once("Connection.php");
$sn=$_POST['Scheme_name'];
$vd=$_POST['Validity_date'];
$id =$_POST['si'];
//echo $sn+" "+$vd+" "+$id;
//exit();
$filetoupload = basename($_FILES['uploaddoc']['name']);
if($filetoupload==NULL)
{
		$str = "update scheme set Scheme_name=:sn,Validity_date=:vd where Scheme_id =:id";
		$stmt= $con->prepare($str);
		$stmt->bindValue(":sn",$sn);
		$stmt->bindValue(":vd",$vd);
		$stmt->bindValue(":id",$id);
		
		if($stmt->execute())
		{
			header("location:scheme.php");
		}
		else
		{
			echo "process fail";
		}
}
else
{
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
		$str = "update scheme set Scheme_name=:sn,Description_path=:dp,Validity_date=:vd where Scheme_id =:id";
		$stmt= $con->prepare($str);
		$stmt->bindValue(":sn",$sn);
		$stmt->bindValue(":dp",$path);
		$stmt->bindValue(":vd",$vd);
		$stmt->bindValue(":id",$id);
		
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
}
header("Location:scheme.php");  
?>