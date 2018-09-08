<?php require_once("connection.php");
$cid=$_GET["circleid"];
?>
		<div class="container">
    	<table class="tb1" align="center" style="font-size:16px;" border="2" >
    		<tr class="bg-danger" align="center" style="font-size:18px; font-weight:100"><td>No.</td><td>Name</td><td>Circle Name</td><td>Update</td><td>Delete</td>	
        	</tr>
      	<?php
			
			
			$str = "select village.Village_id,village.Village_name, circle.Circle_name from village LEFT JOIN circle ON circle.Circle_id = village.Circle_id where village.Status = 1 and village.Circle_id = :id ";
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
       		
	   	?>
		</table>
    </div>			
    


?>