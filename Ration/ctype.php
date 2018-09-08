<?php 
	session_start();
if(isset($_SESSION['username']))
{ 
include("top.php"); ?>
	<!-- Start from here -->
	<div class="container well" align="center">
    	<form class="form-horizontal" action="wk_ctype.php" method="post">
        	<strong style="font-size:20px;">Card Type : </strong>
            <input type="text" name="name" id="name" onkeypress='return lettersOnly(event)' required/>&nbsp;&nbsp;&nbsp;
        	<input class="btn-danger" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" name="add" value="Save"/>       
       </form>
	</div>
    <div class="container">
    	<table border="2" align="center" style="font-size:16px;" class="tb1" >
    		<tr class="bg-success" align="center" style="font-size:18px; font-weight:100"><td> Card Type ID.</td><td> Card Type </td> <td>  Update  </td><td>  Delete </td>
        	</tr>
          
      	<?php 
       			include_once("connection.php");
				$str = "select * from cardtype where Status=1";
				$stmt = $con->prepare($str);
				$stmt->execute();
				$i=1;
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					
		?>
        			<tr align="center" class="bg-warning">
                    	<td><?php echo $i;?></td>
                        <td> <?php echo $row["Card_type"];?></td>
                        <td><a href="wk_update_ctype.php?id=<?php echo $row["Ctype_id"]; ?> "><img src="img/edit.png" width="25"/></a></td>
                    	<td><a href="wk_del_ctype.php?id=<?php echo $row["Ctype_id"]; ?>" onclick="return confirm('Are you sure?')">
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