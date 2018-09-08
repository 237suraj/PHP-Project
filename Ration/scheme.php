<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
    <!-- Start from here -->
    <div class="container well" align="center">
    <form action="wk_scheme.php" method="post" enctype="multipart/form-data" name="scheme">
    	<table align="center" style="font-size:16px;">
        	<tr height="35"><td align="right"><strong>Scheme name:</strong></td>
            <td><input type="text" name="Scheme_name" id="Scheme_name"  required/></td></tr>
            <tr height="35"><td align="right"><strong>Validity Date:</strong></td>
            <td>
            	<input type="text" name="Validity_date" id="Validity_date" onkeypress='return NotNumLetter(event)' 
                	class="datepicker-here" data-language='en' data-date-format="yyyy/mm/dd" required/>
            </td></tr>
            <tr height="35"><td align="right"><strong>Select file:</strong></td><td><input type="file" name="uploaddoc" id="uploaddoc" required/></td></tr>
          	<tr><td></td>
            	<td><input class="btn-danger" type="submit" name="add" value="Add" style="border-radius:10px; font-size:18px;"/><br/></td></tr>     	</table>
	</form></div>
    <div class="container">
        <table align="center" border="2" class="tb4">
        <tr align="center" class="bg-primary"><td>Id</td><td>Scheme Name</td><td>Validity date</td><td>Update</td><td>Delete</td>
       <?php 
       	include_once("Connection.php");
		$str = "select * from scheme where status=1";
		$stmt = $con->prepare($str);
		$stmt->execute();
		 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
        <tr align="center" class="bg-info"><td><?php echo $row["Scheme_id"];?></td>
        	<td ><? echo $row["Scheme_name"];?></td><td> <?php echo $row["Validity_date"];?></td>
            <td ><a href="update_scheme.php ?si=<?php echo $row["Scheme_id"]; ?>"><img src="img/edit.png" width="25"/></a></td>
            <td><a href="wk_del_scheme.php?si=<?php echo $row["Scheme_id"]; ?>" onclick="return confirm('Are you sure?')">
            <img src="img/icon/delete24.gif"/></a></td>
		</tr>
	<?php
		}
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

