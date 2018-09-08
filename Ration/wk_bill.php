<?php
include_once("Connection.php");
$regno=$_POST['regno'];
$date=$_POST['date'];
$qry="select Shop_name from login where Reg_no=:regno";
$stmt= $con->prepare($qry);
$stmt->bindValue(":regno",$regno);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$shopname=$row['Shop_name'];
?>
<html>
<head><title> Bill </title></head>
<body onLoad="window.print();">
	<div style="position:relative; height:35px;"></div>
    <div style="position:relative; left:61%; height:40px; font-size:22px">Date : <?php echo $date; ?></div>
    <div style="position:relative; left:21%; height:40px; font-size:22px">Shop Name : <?php echo $shopname; ?></div>
	<hr/>
	<table align="center" style="font-size:18px; width:60%" border="1">
    	<tr align="center" style="font-size:20px; background-color:#FF9933">
            	<td> No. </td><td> Item Name </td><td> Quantity </td><td> Rate </td><td> Amount </td>
        </tr>
<?php
$qry1="select * from adminsale where Reg_no=:regno and Date=:date ";
$stmt1= $con->prepare($qry1);
$stmt1->bindValue(":regno",$regno);
$stmt1->bindValue(":date",$date);
$stmt1->execute();
$s=1;
$total=0;
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
{
?>

        <tr align="center" style="font-size:20px;">
            	<td><?php echo $s;?></td><td><?php echo $s;?></td><td><?php echo $row1['Quantity'];?></td>
                <td><?php echo $row1['Rate'];?></td><td><?php echo $row1['Amount'];?></td>
        </tr>
<?php
$total=$total+ $row1['Amount'];
$s++;
}
?>
       <tr align="center" style="font-size:20px; background-color:#FF9933">
            	<td colspan="4" align="center">Total Amount</td><td><?php echo $total;?></td>
        </tr>   
       
    </table>
    
    
</body>
</html>	
