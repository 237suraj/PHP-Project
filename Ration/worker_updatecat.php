<?
include_once("connection.php");
$cc=$_POST['pc'];
$cn=$_POST['txtcn'];
$uploaddir='upload/';
$uploadfile=$uploaddir.basename($_FILES['uploadimg']['name']);
echo $cn;
echo $uploadfile;

$exp=explode(".",$uploadfile);
$ext=$exp[1];
echo "you extension : ".$ext."<br>";


$date=date("dhms");
$filename="PR_".$date.".".$ext;
echo "New File name : ".$filename;

$uploaddir = 'upload/';
$path= 'upload/'.$filename;
echo "<br>new file path is : ".$path;
if($ext=="jpg" || $ext=="png" || $ext=="jpeg")
{
	if(move_uploaded_file($_FILES['uploadimg']['tmp_name'],$path))
	{
			$str = "UPDATE cat_master set cname=:cn,imgpath=:img WHERE ccode=:cc";
			$stmt= $con->prepare($str);
			$stmt->bindValue(":cn",$cn);
			$stmt->bindValue(":cc",$cc);
			$stmt->bindValue(":img",$path);
			if($stmt->execute())
			{
				header("location: show_category.php");
			}
			else{
				echo "process fail";
			}
	}
	else
	{
			$_SESSION['MSG']="Fail to upload file";
	    	header("location: add_category.php");
	}
}
else{
		$_SESSION['MSG']="Only Images can be uploaded";
		header("location: add_category.php");
}
?>