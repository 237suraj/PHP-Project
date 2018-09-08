<?php 
	session_start();
if(isset($_SESSION['username']))
{ 
include("top.php"); ?>
	<!-- Start from here -->
	<div class="container well" align="center">
    	<form class="form-horizontal" action="wk_circle.php" method="post">
        	<strong style="font-size:20px;">Circle name : </strong>
            <input type="text" name="name" id="name" onkeypress='return lettersOnly(event)' required/>
            &nbsp;&nbsp;&nbsp;
        	<input class="btn-success" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" name="add" value="Add"/>       
       </form>
	</div>
    <div class="container" align="center">
   		<table class="tb1" align="center" style="font-size:16px;" border="2">
    		<tr class="bg-info" align="center" style="font-size:18px; font-weight:100"><td> No.</td><td> Circle Name </td> <td> Update </td><td> Delete </td>	
        	</tr>
          
      	<?php 
       			include_once("connection.php");
				$str = "select * from circle where Status=1";
				$stmt = $con->prepare($str);
				$stmt->execute();
				$i=1;
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					
		?>
        			<tr align="center" class="bg-warning">
                    	<td><?php echo $i;?></td>
                        <td> <?php echo $row["Circle_name"];?></td>
                        <td><a href="update_circle.php?id=<?php echo $row["Circle_id"]; ?> "><img src="img/edit.png" width="25"/></a></td>
                    	<td><a href="wk_del_circle.php?id=<?php echo $row["Circle_id"]; ?>" onclick="return confirm('Are you sure?')">
                        	<img src="img/delete.gif"/> </a>
                        </td>                 
        			</tr>
        <?php
				$i++;}
	   	?>
		</table>
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