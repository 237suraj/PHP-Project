<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
       <!-- Start from here -->
      
       <div class="jumbotron container panel panel-info" align="center">
       		<div class="panel-heading" align="center" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:24px; font-weight:100">
        		<strong> Update Village </strong>
        	</div><div style="position:relative; height:30px;"> </div> 
       		<form class="form-horizontal" action="wk_update_village.php" method="post">
            	<table align="center">
                <tr><th align="right"><strong style="font-size:20px;"> Circle name : </strong></th>
                    	<td>
                        	<select name="id" style="font-size:18px">
                				<option>- Select Circle --</option>
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
            				</select>
                        </td></tr>
                	<tr><th align="right"><strong style="font-size:20px;">Village name : </strong></th>
                <?php 
	   							include_once("connection.php");
	   							$id=$_GET['id'];
								$sql = "select * from village where Village_id=:id";
								$stmt = $con->prepare($sql);
								$stmt->bindParam(":id",$id);
								$stmt->execute();
								$row=$stmt->fetch(PDO::FETCH_ASSOC);			
	   			?>
                    
                    	<td>&nbsp; <input type="text" placeholder="<?php echo $row['Village_name']; ?>" name="name" id="name"/></td></tr>
                    <tr><th></th><td><input class="btn-primary" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" value="Update"/></td></tr>
                <input type="hidden" name="vid" value="<?php echo $row['Village_id']; ?>" />      
                </table>
       		</form>
       </div>
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
