<?php 
	include_once("Connection.php");
	$reno=$_GET['regno'];
	$qry1="select Village_id from card where Village_id=:vid and Status=1";
	$stmt1 = $con->prepare($qry1);
	$stmt1 -> bindParam(":vid",$vid);
	$stmt1 -> execute();
	?>  
    	<div style="position:relative; height:15px;"></div>
    	<table border="1" class="bg-info" align="center" width="75%" >
        	<tr align="center" style="font-size:20px; background-color:#FF9933">
            	<td> No. </td><td> Name </td><td> Adhar No. </td><td> Total unit </td><td> Card Type </td><td> Gas Connection </td><td> Show </td>
            </tr>
	<?php