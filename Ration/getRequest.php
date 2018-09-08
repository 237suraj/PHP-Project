<?php 
	include_once("Connection.php");
	$vid=$_GET['vid'];
	$qry1="select Reg_no from login where Village_id=:vid and Status=1";
	$stmt1 = $con->prepare($qry1);
	$stmt1 -> bindParam(":vid",$vid);
	$stmt1 -> execute();
	$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
	if($row1['Reg_no']!=0){
	?><div style="position:relative; height:15px;"></div> 
     <table border="1" class="bg-info" align="center" width="75%">
            	<tr align="center" style="font-size:20px; background-color:#FF9933">
                	<td> Order No. </td><td> Reg. No.</td><td> Item Name </td><td> Required Quantity </td><td> Order Date </td>
            	</tr>
	<?php
	while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
	{    
    	$qry2="select * from distpurchase where Reg_no=:regno and Remark=0";
		$stmt2 = $con->prepare($qry2);
		$stmt2 -> bindParam(":regno",$row1['Reg_no']);
		$stmt2 -> execute();
		while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
		{ ?>
		 <tr align="center">
   			<td> <?php echo $row2['Order_no'];?> </td><td> <?php echo $row2['Reg_no'];?> </td>
            <td> <?php $itemid=$row2['Item_id'];
						$qry3="select Item_name from item where Item_id=:id";
						$stmt3 = $con->prepare($qry3);
						$stmt3 -> bindParam(":id",$itemid);
						$stmt3 -> execute();
						$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
						echo $row3['Item_name'];
				?> 
            </td>
            <td> <?php echo $row2['Quantity'];?> </td><td> <?php echo $row2['Order_date'];?> </td>
    	</tr>                             
<?php	} 
  } 
  }else {?>
  		<tr align="center"><td> </td><td>Data Not Found</td> </tr>
  <?php }?> 
     </table> 
       <!--Stop here -->	
</body>
</html>
