<?php require_once("connection.php");
	$cardno=$_GET["cn"];
	$qry = "select * from card where Card_no=:cn and Status=1";
	$stmt=$con->prepare($qry);
	$stmt->bindParam(":cn",$cardno);
	$stmt->execute();
	$row1=$stmt->fetch(PDO::FETCH_ASSOC);
?>

  <table align="center" style="font-size:18px">
            <tr height="35px"><td align="right"><strong>  Card No.:  </strong></td>
            <td>&nbsp;&nbsp;<input type="text" name="cardno"  id="cardno" onkeypress='return isNumberKey(event)' value="<?php echo $cardno; ?>" readonly/></td></tr>
        	<tr height="35px"><td align="right"><strong>Name : </strong></td>
            <td>&nbsp;&nbsp;<input type="text"name="name" id="name" onkeypress='return lettersOnly(event)' value="<?php echo $row1['Name']; ?>" required/></td></tr>
            <tr height="35px"><td align="right"><strong>Adhar No. : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" readonly="readonly" name="ano" id="ano" onkeypress='return isNumberKey(event)' value="<?php echo $row1['Adhar_no']; ?>" required/></td></tr>
            <tr height="35px"><td align="right"><strong>Adult : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="Adult" id="Adult" onkeypress='return isNumberKey(event)' value="<?php echo $row1['Adult']; ?>" required/></td></tr>
            <tr height="35px"><td align="right"><strong>Child : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="Child" id="Child" onblur='cal()' onkeypress='return isNumberKey(event)' value="<?php echo $row1['Child']; ?>" required/></td></tr>
            <tr height="35px"><td align="right"><strong>Total Unit : </strong></td> 
            <td>&nbsp;
            	<input type="text" name="total" id="Total_unit" onkeypress='return isNumberKey(event)' readonly="readonly" value="<?php echo $row1['Total_unit']; ?>" required/>
            </td></tr>
            <tr height="35px"><td align="right"><strong>Card Type : </strong></td>
            <td>&nbsp;&nbsp;<select name="ctypeid" id="ctype">
            <?php 
				$qry2 = "select * from cardtype where Ctype_id=:cid";
				$stmt2 = $con->prepare($qry2);
				$stmt2 -> bindParam(":cid",$row1['Ctype_id']);
				$stmt2 ->execute();
				while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
				{
			?>
            	<option value="<?php echo $row2['Ctype_id']; ?>"><?php echo $row2['Card_type']; ?></option>
            <?php 
				}
				$qry3 = "select * from cardtype";
				$stmt3 = $con->prepare($qry3);
				$stmt3 ->execute();
				while($row3=$stmt3->fetch(PDO::FETCH_ASSOC))
				{ ?>  
                	<option value="<?php echo $row3['Ctype_id']; ?>"><?php echo $row3['Card_type']; ?></option>
            <?php }?></select>
            </td></tr>
            <tr height="35px"><td align="right"><strong>Gas Connection : </strong></td>
            <td>&nbsp;&nbsp;<select name="gas" required>
            			<option value="0">No</option>
                        <option value="1" selected="selected">Yes</option>
                        </select>
             </td></tr>
            <input type="hidden" name="cardno" value="<?php echo $cardno ?>"/>
 </table>
