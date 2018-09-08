<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
       <!-- Start from here -->
       
       	<div class="container well">
      	<center> <form action="wk_update_admin_sale.php" method="post">
       	<table>
       		<tr> <th> DATE : </td> <th> <input type="text" name="date" id="date" class="datepicker-here" data-language="en" data-date-format="yyyy/mm/dd" required/></td></tr>
        	<tr> <td>&nbsp;</td><td></td></tr>
        	<tr> <td</td><td> <input type="submit" value="GO" /></td></tr>
       	</table>
       	</form></center>
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
