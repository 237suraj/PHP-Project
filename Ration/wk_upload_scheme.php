<? session_start();
$filetoupload = basename($_FILES['uploaddoc']['name']);
echo $filetoupload."<br>";

$exp=explode(".",$filetoupload);
$ext=$exp[1];
echo "you extension : ".$ext."<br>";


$date=date("dm");
$filename="PR_".$date.".".$ext;
echo "New File name : ".$filename;

$uploaddir = 'upload/';
$path= 'upload/'.$filename;
echo "<br>new file path is : ".$path;
if($ext=="jpg")
{
if (move_uploaded_file($_FILES['uploadimg']['tmp_name'], $path)) {

 echo "<br>File is successfully uploaded.\n";
}
}
else
{
	echo "<br>Sorry only image files can be uploaded";
}
?>