<?php 
	session_start();
if(isset($_SESSION['username']))
{ 
include("top.php"); ?>
       <!-- Start from here -->
          	<div class="container well" align="center">
			<form class="form-horizontal" action="wk_dist_sale.php" method="post">
            <table style="font-size:18px"><tr height="50" style="font-size:26px"><th></th><th><strong> Distribution Sale</strong></th></tr>
			<tr height="35"><td align="right"> Date : </td><td>&nbsp;&nbsp;<input type="text" name="Date" placeholder="Enter Date" required /></td></tr>
            <tr height="35"><td align="right">Item ID : </td><td>&nbsp;&nbsp;<input type="text" name="Item_id" placeholder="Enter Item ID" required/></td></tr>
            <tr height="35"><td align="right">Quantity : </td><td>&nbsp;&nbsp;<input type="text" name="Quantity" placeholder="Enter Quantity" required /></td></tr>
            <tr height="35"><td align="right">Rate : </td><td>&nbsp;&nbsp;<input type="text" name="Rate" placeholder="Enter Rate" required /></form></td></td>
            <tr height="35"><td align="right">Amount : </td><td>&nbsp;&nbsp;<input type="text" name="Amount" placeholder="Enter Amount" required /></td></tr>
            <tr height="35"><td align="right">Card No : </td><td>&nbsp;&nbsp;<input type="text" name="Card_no" placeholder="Enter Card No" required /></td></tr>
            <tr height="35"><td align="right"> Distribution ID : </td><td>&nbsp;&nbsp;<input type="text" name="Distid" placeholder="Enter Dist Id" required /></td></tr>
            <tr height="35"><td align="right">Difference :</td><td>&nbsp;&nbsp;<input type="text" name="Difference" placeholder="Enter Diff" required /></td></tr>
            <tr height="50"><td align="right"></td><td><input type="submit" name="add" value="Add" /></td></tr>
      		</table>
                     
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