<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php");include("file.php");  ?>
       <!-- Start from here -->
<link rel="stylesheet" type="text/css" href="css/Mystyle.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />


	<div class="container well">
    	<?php
			$sid=$_GET['sid'];
			$name=$_GET['name'];
			$path=$_GET['path'];
			
					$kv_texts = kv_read_word($path);
					echo $kv_texts;
					exit();
					if($kv_texts !== false)
					{
						echo nl2br($kv_texts);
					}
					else
					{
						echo "Can't Read that file.";
					}
		?>
		
   
    </div>   
       
       <!--Stop here -->	
</body>
</html>
<?php
}
else
{
	echo "<script> alert(' Please login First '); </script>";
	header("refresh:0;url=index.php");
}?>
