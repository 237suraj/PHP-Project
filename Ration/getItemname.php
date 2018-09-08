<?php require_once("connection.php");
$orderno=$_GET["orderno"];
$sql="select * from distpurchase where Order_no=:orderno"; 
$stmt = $con->prepare($sql);
$stmt->bindParam(':orderno',$orderno);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
	 <table align="center" style="font-size:18px">
            <tr height="40px"><td align="right"><strong>Item Name : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="item" id="itemname" onfocus="return check()" onkeypress='return  NotNumLetter(event)' 
                	value="<?php 
								$sql2="select Item_name from item where Item_id=:item"; 
								$stmt1 = $con->prepare($sql2);
								$stmt1->bindParam(':item',$row['Item_id']);
								$stmt1->execute();
								$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
								echo $row1['Item_name']; 
							?>" readonly="readonly"/></td>
            </tr>            
            <tr height="40px"><td align="right"><strong>Quantity : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="quantity" id="quantity" onfocus="return check()" onkeypress='return isNumberKey(event)'
                	value="<?php echo $row['Quantity']; ?>" required/></td></tr>
            <tr height="40px"><td align="right"><strong>Rate : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="rate" id="rate" onkeypress='return isNumberKey(event)' onblur='calamount()' required/></td></tr>
            <tr height="40px"><td align="right"><strong>Amount : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="amount" id="amount" readonly="readonly" required/></td></tr>
        	</table>
<?php
	
}
?>