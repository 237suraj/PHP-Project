<?php
	session_start();
if(isset($_SESSION['username']))
{
include("top.php"); 
?>
       <!-- Start from here -->
       
     
      <div align="center">
      <form action="wk_stock.php" method="post">
      <span> Previous Quantity:</span><input type="text" name="Pre_quantity" id="Pre_quantity"/>
      <span> New Quantity:</span><input type="text" name="New_quantity" id="New_quantity"/>
      <span> Date:</span><input type="text" name="Date" id="Date"/>
      <input type="submit" name="add" value="Add"/>       
      </form>
       <table>
       <tr><th>Item_ID </th><th>Pre_quantity</th><th>New_quantity</th><th>Date</th></tr>
        <?php 
       	include_once("Connection.php");
		$str = "select * from stock";
		$stmt = $con->prepare($str);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{ ?>
        
        <tr><td><? echo $row["Item_id"];?></td><td><tr><td><? echo $row["Pre_quantity"];?></td><td><tr><td><? echo $row["New_quantity"];?></td><td><tr><td><? echo $row["Date"];?></        td><td><a href="#">Update</a></td><td><a href="#">Del</a></td></tr>
        
        
		<?
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
