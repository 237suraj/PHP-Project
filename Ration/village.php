<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
	<!-- Start from here -->
   	<div class="container well" align="center">
    	<form class="form-horizontal" action="wk_village.php" method="post"  >
        <table>
        	<tr><td><strong style="font-size:20px;">Circle </strong></td>
            	<td>:<select name="id" id="cid" style="font-size:18px" onChange="showVillage(this.value);" >
                <option value="0">- Select Circle --</option>
     <?php 
		include_once("connection.php");
		$str = "select * from circle";
		$stmt = $con->prepare($str);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?><option value="<?php echo $row["Circle_id"];?>"><?php echo $row["Circle_name"];?></option> <?php	
		}
	?>            	
            </select></td></tr>
            <tr height="40"><td><strong style="font-size:20px;">Village </strong></td>
            	<td>:<input type="text" name="name" id="name" onkeypress='return lettersOnly(event)' onclick="return check()" required/></td></tr>
            <tr><td></td>
            	<td>&nbsp;&nbsp;<input class="btn-primary" 
                	style="border-radius:10px; font-size:18px;" type="submit" value="Add" onclick="return check()" /></td></tr>
  		</table>       
       </form>
	</div>
    <div id="showVillage"></div>
       <!--Stop here -->   
</body>
<script language="javascript"> 
	function check()
	{
		var id = document.getElementById('cid').value;
		if(id==0)
		{
			var msg = "Please select circle";
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