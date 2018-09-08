<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
<script>
function isempty(field){
	if(field.value=='')
	{
		alert("Please enter the card no");
	}
	else{
		getCard(field.value);
	}
}
</script>
	<!-- Start from here -->
 <form action="wk_update_card.php" method="post">
	<div class="con mydiv" align="center" id="records">
        <table align="center" style="font-size:18px">
            <tr height="35px"><td align="right"><strong>  Card No.:  </strong></td>
            <td>&nbsp;&nbsp;<input type="text" name="cardno"  id="cardno" onkeypress='return isNumberKey(event)' onblur="isempty(this);" required/></td></tr>
        	<tr height="35px"><td align="right"><strong>Name : </strong></td>
            <td>&nbsp;&nbsp;<input type="text"name="name" id="name" onkeypress='return lettersOnly(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Adhar No. : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" readonly="readonly" name="ano" id="ano" onkeypress='return isNumberKey(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Adult : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="Adult" id="Adult" onkeypress='return isNumberKey(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Child : </strong></td>
            <td>&nbsp;&nbsp;<input type="number" name="Child" id="Child" onblur='cal()' onkeypress='return isNumberKey(event)' required/></td></tr>
            <tr height="35px"><td align="right"><strong>Total Unit : </strong></td> 
            <td>&nbsp;
            	<input type="text" name="total" id="Total_unit" onkeypress='return isNumberKey(event)' readonly="readonly" required/>
            </td></tr>
            <tr height="35px"><td align="right"><strong>Card Type : </strong></td>
            <td>&nbsp;&nbsp;<select name="ctypeid" id="ctype">
            	<option value="0">-select card-</option>
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
             </table>
     
	</div>
       <div class="con mydiv" align="center">
             <input  class="btn-success" style="border-radius:10px; font-size:18px; margin-top:5px; margin-left: 120px;" 
             type="submit" name="update" value="update" onclick="return checkctype_getcard()"/> 
        </div>
</form>
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
