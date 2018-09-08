<?php 
	session_start();
if(isset($_SESSION['username']))
{ 
include("top.php"); ?>
       <!-- Start from here -->
      <form action="wk_bill.php" method="post" name="bill">
      	<div class="con1 divmatch" align="center">
          	<h2 align="center" class="panel panel-danger panel-heading" style="background-color:#FF9933;">  Bill </h2>
		<table align="center" style="font-size:18px">
        	<tr height="40px"><td align="right"><strong> Date : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="date" id="date" onkeypress='return NotNumLetter(event)' 
                class="datepicker-here" data-language="en" data-date-format="yyyy/mm/dd"  required/></td>
       	    </tr>
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
            	<td>&nbsp;&nbsp;<select name="vid" id="villageid"  style="width:210px" onfocus="return checkcir()" onchange="getShopkeeper(this.value)">
                	<option value="0">- Select Village -</option>
                	</select></td>	
            </tr>
            <tr height="40px"><td align="right"><strong>Shop Name : </strong></td>
            	<td>&nbsp;&nbsp;<select name="regno" id="regno"  style="width:210px" onfocus="return checkvil()" onchange="getOrderno(this.value)">
                	<option value="0">- Select Shop Name -</option>
                	</select></td>
            </tr>
              
                         <tr height="40px"><td></td><td align="center">&nbsp;&nbsp;&nbsp;<input class="btn-success" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" name="bill" value="Print Bill" onfocus="return check()"/>&nbsp;&nbsp;&nbsp;<input class="btn-warning" style="border-radius:10px; font-size:18px; margin-top:5px" type="reset" value="Cancle" /></td>
       		</tr></table>
        </div>
        </form>
 
       <!--Stop here -->	
</body>
<script language="javascript"> 
	function checkcir()
	{
		var cid = document.getElementById('cid').value;
		if(cid==0)
		{
			alert("Please select Circle");
			return false;
		}
	}
	function checkvil()
	{
		var vid = document.getElementById('villageid').value;
	
		if(vid==0)
		{
			alert("Please select Village");
			return false;
		}
	}
	
	function check()
	{
		var cid = document.getElementById('cid').value;
		var regno = document.getElementById('regno').value;
		var vid = document.getElementById('villageid').value;
		if(cid==0)
		{
			alert("Please select Circle");
			return false;
		}
		else if(vid==0)
		{
			alert("Please select Village");
			return false;
		}
		else if(regno==0)
		{
			alert("Please select Shop Name");
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