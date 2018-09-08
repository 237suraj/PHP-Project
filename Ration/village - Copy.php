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
            	<td>:<input type="text" name="name" id="name" onkeypress='return lettersOnly(event)' required/></td></tr>
            <tr><td></td>
            	<td>&nbsp;&nbsp;<input class="btn-primary" 
                	style="border-radius:10px; font-size:18px;" type="submit" value="Add" onclick="return check()" /></td></tr>
  		</table>       
       </form>
	</div>
    <div id="showVillage"></div>
    <!--<div class="container">
    	<table class="tb1" align="center" style="font-size:16px;" border="2" >
    		<tr class="bg-danger" align="center" style="font-size:18px; font-weight:100"><td>No.</td><td>Name</td><td>Circle Name</td><td>Update</td><td>Delete</td>	
        	</tr>
      	<?php
			
			$str = "select village.Village_id,village.Village_name, circle.Circle_name from village LEFT JOIN circle ON circle.Circle_id = village.Circle_id where village.Status = 1 ";
				
				$stmt = $con->prepare($str);
				$stmt->bindParam(":id",$cid);
				$stmt->execute();
				$i=1;
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
				
			?>
        			<tr align="center"  bgcolor="#CCCC99">
                    	<td><?php echo $i;?></td>
                        <td><?php echo $row["Circle_name"];?></td>
                        <td><?php echo $row["Village_name"];?></td>
                        <td><a href="update_village.php?id=<?php echo $row["Village_id"]; ?> "><img src="img/edit.png" width="25"/></a></td>
                    	<td><a href="wk_del_village.php?id=<?php echo $row["Village_id"]; ?>" onclick="return confirm('Are you sure?')">
                        	<img src="img/delete.gif"/> </a>
                        </td>                 
        			</tr>
        <?php
				
				$i++;}
       		/*	
				$str = "select * from village where Status=1";
				$stmt = $con->prepare($str);
				$stmt->execute();
				$i=1;
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					
		?>
        			<tr align="center"  bgcolor="#CCCC99">
                    	<td><?php echo $i;?></td>
                        <td><?php echo $row["Village_name"];?></td>
                        <td><?php 
									$sql2="select Circle_name from circle where Circle_id=:id";
									$stmt2=$con->prepare($sql2);
									$stmt2->bindParam(":id",$row["Circle_id"]);
									$stmt2->execute();
									$row2=$stmt2->fetch(PDO::FETCH_ASSOC);
									echo $row2["Circle_name"];?></td>
                        <td><a href="update_village.php?id=<?php echo $row["Village_id"]; ?> "><img src="img/edit.png" width="25"/></a></td>
                    	<td><a href="wk_del_village.php?id=<?php echo $row["Village_id"]; ?>" onclick="return confirm('Are you sure?')">
                        	<img src="img/delete.gif"/> </a>
                        </td>                 
        			</tr>
        <?php
				$i++;} */
	   	?>
		</table>
    </div>			
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