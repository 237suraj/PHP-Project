<?php include("top.php"); ?>
       <!-- Start from here -->
    
      <div class="container">
    	<table border="2" align="center" style="font-size:16px;" class="tb1" >
    		<tr class="bg-success" align="center" style="font-size:18px; font-weight:100"><td> No.</td><td>Item </td> <td> Quantity </td><td> Rate</td><td> Amount </td><td> Distributer</td><td>  Update</td><td> Delete </td>	
        	</tr>
          
      	<?php 
       			include_once("connection.php");
				$dt=$_POST['date'];
				$sql = "select * from adminsale where Date=:dt";
				$stmt = $con->prepare($sql);
				$stmt->bindParam(":dt",$dt);
				$stmt->execute();
				$i=1;
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
				 $qer="SELECT Shop_name FROM login WHERE Reg_no =:rg and Status=1";
				 $s1 = $con->prepare($qer);
				$s1->bindParam(":rg",$row["Dist_id"]);
				$s1->execute();
				$row1=$s1->fetch(PDO::FETCH_ASSOC);
				
				$qr="select Item_name FROM item where Item_id=:it and Status=1";
				$s2=$con->prepare($qr);
				$s2->bindParam(":it",$row['Item_id']);
				$s2->execute();
				$row2=$s2->fetch(PDO::FETCH_ASSOC);
				
					
		?>
        			<tr align="center" class="bg-info">
                    	<td><?php echo $i;?></td>
                        <td> <?php echo $row2["Item_name"];?></td>
                        <td> <?php echo $row["Quantity"];?></td>
                        <td> <?php echo $row["Rate"];?></td>
                        <td> <?php echo $row["Amount"];?></td>
                        <td> <?php echo $row1["Shop_name"];?></td>
                        
                        
                        <td><a href="update_item.php?id=<?php echo $row["Id"]; ?> "><img src="img/edit.png" width="25"/></a></td>
                    	<td><a href="wk_del_item.php?id=<? echo $row["Id"]; ?>" onclick="return confirm('Are you sure?')">
                        	<img src="img/icon/delete24.gif"/> </a>
                        </td>                 
        			</tr>
        <?php
				$i++;}
	   	?>
		</table>
    </div>    			
       <!--Stop here -->	
</body>
</html>
