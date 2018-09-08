<?php 
	include_once("Connection.php");
	$vid=$_GET['vid'];
	$qry1="select Village_id from card where Village_id=:vid and Status=1";
	$stmt1 = $con->prepare($qry1);
	$stmt1 -> bindParam(":vid",$vid);
	$stmt1 -> execute();
	$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
	if($row1['Village_id']!= 0){
	?>  
    	<div style="position:relative; height:15px;"></div>
    	<table border="1" class="bg-info" align="center" width="75%" >
        	<tr align="center" style="font-size:20px; background-color:#FF9933">
            	<td> Card No. </td><td> Name </td><td> Adhar No. </td><td> Total unit </td><td> Card Type </td><td> Gas Connection </td><td> Show </td>
            </tr>
	<?php
	while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
	{    
    	$qry2="select * from card where Village_id=:vid and Status=1";
		$stmt2 = $con->prepare($qry2);
		$stmt2 -> bindParam(":vid",$row1['Village_id']);
		$stmt2 -> execute();
		while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
		{ ?>
		
    					 <tr align="center">
                			<td> <?php echo $row2['Card_no'];?> </td><td> <?php echo $row2['Name'];?> </td>
                            <td> <?php echo $row2['Adhar_no'];?> </td> <td> <?php echo $row2['Total_unit'];?> </td>
                            <td> <?php $ctypeid=$row2['Ctype_id'];
							
									$qry3="select Card_type from cardtype where Ctype_id=:cid";
									$stmt3 = $con->prepare($qry3);
									$stmt3 -> bindParam(":cid",$ctypeid);
									$stmt3 -> execute();
									$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
									echo $row3['Card_type'];
								?> 
                            </td>
                            <td> <?php echo $row2['Gas_con'];?> </td>
                            <td><a href="Card_detail.php?cno=<?php echo $row2["Card_no"];?>&name=<?php echo $row2["Name"];?>&adharno=<?php echo $row2["Adhar_no"];?>&totalunit=<?php echo $row2["Total_unit"];?>&ctype=<?php echo $row3["Card_type"];?>&gascon=<?php echo $row2["Gas_con"];?>">
                            		<img src="img/edit.png" width="25"/></a></td>
            			</tr>                             
	          <?php	} 
			  }}else {?>
  		<tr align="center"><td> </td><td>Data Not Found</td> </tr>
  <?php }?> 
            </table> 
