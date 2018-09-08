<?php
	session_start();
if(isset($_SESSION['username']))
{ 
	include("top.php"); ?>
       <!-- Start from here -->
	<div class="container well" align="center">
    	
        	<h2 align="center" class="panel panel-danger panel-heading" style="background-color:#CC9933;">  Admin Purchase </h2>
        
    	<form action="wk_admin_purchase.php" method="post">
        <table align="center" style="font-size:18px">
        	<tr height="40px"><td align="right"><strong> Date : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="Date" id="Date" onkeypress='return NotNumLetter(event)' 
                class="datepicker-here" data-language="en" data-date-format="yyyy/mm/dd"  required/></td></tr>
                
                <tr height="35px"><td align="right"> <strong>item :</strong></td>
            	<td>&nbsp;&nbsp;<select name="id" id="itemid" style="width:210px">
                <option value="0">- Select Item -</option>
                <?php 
		            include_once("connection.php");
		            $str = "select * from item where Status=1";
		            $stmt = $con->prepare($str);
		            $stmt->execute();
		            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		            {
			      ?>
            <option value="<?php echo $row["Item_id"];?>"><?php echo $row["Item_name"];?></option> <?php	
		            }
	            ?>            	
            </select></td></tr>
            <tr height="40px"><td align="right"><strong>Quantity : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="quantity" id="quantity" onkeypress='return isNumberKey(event)' onfocus="return check()" required/></td></tr>
            <tr height="40px"><td align="right"><strong>Rate : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="rate" id="rate" onkeypress='return isNumberKey(event)' onblur='calamount()' required/></td></tr>
            <tr height="40px"><td align="right"><strong>Amount : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="amount" id="amount" readonly="readonly" required/></td></tr>
        	<tr height="40px"><td></td>
            	<td align="center"><input class="btn-danger" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" name="save" value="Save" onfocus="return check()"/>
       </td>
       </tr></table>
       </form>
	</div>
           
     
       
       
       <!--Stop here -->	
</body>
<script language="javascript"> 
	function check()
	{
		var id = document.getElementById('itemid').value;
		if(id==0)
		{
			var msg = "Please select item first";
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