<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
       <!-- Start from here -->
       
     
       
       
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