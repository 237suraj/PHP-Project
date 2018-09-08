<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php");
    include_once("connection.php");
	   		$si=$_GET['si'];
			$sql = "select * from scheme where Scheme_id=:si";
			$stmt = $con->prepare($sql);
			$stmt->bindParam(":si",$si);
			$stmt->execute();
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			
			
			
?>
       <!-- Start from here -->
      
      <div class="container well" align="center">
      
      <form action="wk_update_scheme.php" method="post" enctype="multipart/form-data">
    	<table align="center" style="font-size:16px;">
        	<tr height="35"><td align="right"><strong>Scheme name:</strong></td>
            <td><input type="text" name="Scheme_name" id="Scheme_name" value="<?php echo $row['Scheme_name']; ?>" /></td></tr>
            <tr height="35"><td align="right"><strong>Validity Date:</strong></td>
            <td>
            	<input type="text" name="Validity_date" id="Validity_date" value="<?php echo $row['Validity_date']; ?>" 
                onkeypress='return NotNumLetter(event)' class="datepicker-here" data-language='en' data-date-format="yyyy/mm/dd" />
            </td></tr>
            <tr height="35"><td align="right"><strong>Select file:</strong></td><td><input type="file" name="uploaddoc" id="uploaddoc" value="<?php echo $row['Description_path']; ?>" /></td></tr>
          	<tr><td></td>
            	<td><input class="btn-info" type="submit" name="update" value="Update" style="border-radius:10px; font-size:18px;"/><br/></td></tr>     	</table>
                <input type="hidden" name="si" value="<? echo $si?>" />
	</form>
    </div>
</body>
</html>
<?php
}
else
{
	echo "<script> alert(' Please login First '); </script>";
	header("refresh:0;url=index.php");
}?>
