<?php 
	session_start();
if(isset($_SESSION['username']))
{ 
	include("top.php");
	include_once("Connection.php");
	$cardno=$_GET['cno'];
	$name=$_GET['name'];
	$adharno=$_GET['adharno'];
	$totalunit=$_GET['totalunit'];
	$ctype=$_GET['ctype'];
	$gascon=$_GET['gascon'];
	$qry1="select * from distsale where Card_no=:cno and Status=1";
	$stmt1 = $con->prepare($qry1);
	$stmt1 -> bindParam(":cno",$cardno);
	$stmt1 -> execute();
	?>  
    <div class="container well">
    	<table border="1" class="bg-info" align="center" width="75%" >
        	<tr align="center" style="font-size:20px; background-color:#FF9933">
            	<td> Card No. </td><td> Name </td><td> Adhar No. </td><td> Total unit </td><td> Card Type </td><td> Gas Connection </td>
            </tr>
            <tr align="center" style="font-size:18px;">
            	<td><?php echo $cardno;?></td><td><?php echo $name;?></td><td><?php echo $adharno;?></td>
                <td><?php echo $totalunit;?></td><td><?php echo $ctype;?></td><td><?php echo $gascon;?></td>
            </tr>
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
