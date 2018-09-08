<?php  include("top.php"); ?>
	<!-- Start from here -->
	<div class="container well" align="center">
    	<form action="wk_card.php" method="post">
        <table align="center" style="font-size:18px">
        	 <tr height="40px"><td align="right"><strong>Circle : </strong></td>
            	<td>&nbsp;&nbsp;<select name="cid" id="cid" style="width:210px" onChange="getVillage(this.value);" 
                onFocus="getVillage(this.value);">
                <option value="0">- Select Circle -</option>
                <?php 
		            include_once("connection.php");
		            $str = "select * from circle where Status=1";
		            $stmt = $con->prepare($str);
		            $stmt->execute();
		            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		            {
			      ?>
            <option value="<?php echo $row["Circle_id"];?>"><?php echo $row["Circle_name"];?></option> <?php	
		            }
	            ?>            	
            </select></td>	
            </tr>
            <tr height="40px"><td align="right"><strong>Village : </strong></td>
            	<td>&nbsp;&nbsp;<select name="vid" id="villageid"  style="width:210px" onfocus="return checkcir()">
                	<option value="0">- Select Village -</option>
                	</select></td>	
            </tr>
            
            <tr height="35px"><td align="right"><strong>  Card No.:  </strong></td>
            <td>&nbsp;&nbsp;<input type="text" name="cardno"  id="cardno" onkeypress='return isNumberKey(event)' required/></td></tr>
        	<tr height="35px"><td align="right"><strong>Name : </strong></td>
            <td>&nbsp;&nbsp;<input type="text" name="name" id="name" onkeypress='return lettersOnly(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Adhar No. : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="ano" id="ano" onkeypress='return isNumberKey(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Adult : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="Adult" id="Adult" onkeypress='return isNumberKey(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Child : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="Child" id="Child" onblur='cal()' onkeypress='return isNumberKey(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Total Unit : </strong></td> 
            <td>&nbsp;
            	<input type="text" name="total" id="Total_unit" onkeypress='return isNumberKey(event)' readonly="readonly" required/>
            </td></tr>
            <tr height="35px"><td align="right"><strong>Card Type : </strong></td>
            <td>&nbsp;&nbsp;<select name="ctypeid">
            	<option>-select card-</option>
            <?php   
				include_once("Connection.php");
				$qry = "select * from cardtype";
				$stmt = $con->prepare($qry);
				$stmt ->execute();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{ ?>  
                	<option value="<?php echo $row['Ctype_id']; ?>"><?php echo $row['Card_type']; ?></option>
            <?php }?></select>
            </td></tr>
            <tr height="35px"><td align="right"><strong>Gas Connection : </strong></td>
            <td>&nbsp;&nbsp;<select name="gas" required>
            			<option value="0">No</option>
                        <option value="1" selected="selected">Yes</option>
                        </select>
             </td></tr>
            <tr height="35px"><td></td>
            <td align="center">
            <input class="btn-success" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" name="add" value="Add"/></td></tr>       </table>
       </form>
	</div>
           