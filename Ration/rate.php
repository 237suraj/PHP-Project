<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
       <!-- Start from here -->
       <div class="container well">
       <form action="wk_rate.php" method="post">
       		<table align="center" style="font-size:18px" border="0">
            	<tr height="40px"><th align="right">Card Type : </th>
                	<td>&nbsp;<select name="ctype" id="ctype"  width="100px" >
                    	<option value="0">-select Card--</option>
                    <?php 
						include_once("Connection.php");
						$qry="select * from cardtype";
						$stmt = $con->prepare($qry);
						$stmt->execute();
						while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						{
					?>
                    		<option value="<?php echo $row['Ctype_id'];?>"><?php echo $row['Card_type'];?></option>
                    <?php    }?>
                    	</select>
                    </td>
                </tr>
                <tr height="40px"><th align="right">Item Name : </th>
                	<td>&nbsp;<select name="item" id="item"  width="100px" >
                    	<option value="0">--select Item--</option>
                    <?php 
						include("Connection.php");
						$qry1="select * from item";
						$stmt1 = $con->prepare($qry1);
						$stmt1->execute();
						while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
						{
					?>
                    		<option value="<?php echo $row1['Item_id'];?>"><?php echo $row1['Item_name'];?></option>
                    <?php }?>
                    	</select>
                    </td>
                </tr>
                <tr height="40px"><th align="right"> Rate : </th>
                <td>&nbsp;<input type="number" name="rate" style="width:135px" onkeypress='return isNumberKey(event)' required/></td></tr>
                 <tr height="40px"><th></th><td>&nbsp;
                 <input class="btn-success" type="submit" value="Submit" style="border-radius:12px" onclick="return check()"/></td></tr>
            </table>
       	</form>
       </div>
       
       <div class="container">
       		<table  align="center" width="60%" border="2" cellpadding="3">
            	<tr class="bg-success" align="center"><th>No.</th><th>Card Type</th><th>Item Name</th><th>Rate</th><th>Update</th><th>Delete</th></tr>
            <?php 
				$qry2="select * from rate where Status=1";
				$stmt2 = $con->prepare($qry2);
				$stmt2->execute();
				
				$s=1;
				while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
				{
			?>    
                	<tr align="center" bgcolor="#FFCCCC"><td><?php echo $s;?></td>
                	<td><?php
						$qry3="select * from cardtype where Ctype_id=:cid";
						$stmt3 = $con->prepare($qry3);
						$stmt3 ->bindParam(":cid",$row2['Ctype_id']);
						$stmt3->execute();
						$row3 =$stmt3->fetch(PDO::FETCH_ASSOC);	 
						echo $row3['Card_type'];
					?></td>
                	<td><?php
						$qry4="select * from item where Item_id=:id";
						$stmt4 = $con->prepare($qry4);
						$stmt4 ->bindParam(":id",$row2['Item_id']);
						$stmt4->execute();
						$row4 =$stmt4->fetch(PDO::FETCH_ASSOC);	 
						echo $row4['Item_name'];
					?>
                    </td>
                	<td><?php echo $row2['Rate'];?></td>
                    <td><a href="update_rate.php?id=<?php echo $row2["Rate_id"]; ?> "><img src="img/edit.png" width="25"/></a></td>
                    <td><a href="wk_del_rate.php?id=<?php echo $row2["Rate_id"]; ?>" onclick="return confirm('Are you sure?')">
                    	<img src="img/delete.gif"/></a></td>
                </tr>
            <?php $s++;}?>
            </table>
       </div>
     
       
       
       <!--Stop here -->	
</body>

<script language="javascript"> 
	function check()
	{
		var ctype = document.getElementById('ctype').value;
		var item = document.getElementById('item').value;
		if(ctype==0)
		{
			var msg = "Please select card type";
			//msg.innerHTML = "<strong> Please select circle </strong>";
			alert(msg);
			return false;
		}
		else if(item==0)
		{
			var msg = "Please select Item";
			//msg.innerHTML = "<strong> Please select circle </strong>";
			alert(msg);
			return false;
		}
		return true;
	}
</script>

</html>
<?php
}
else
{
	echo "<script> alert(' Please login First '); </script>";
	header("refresh:0;url=index.php");
}?>
