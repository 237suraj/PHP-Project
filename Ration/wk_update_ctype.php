<?php include("top.php"); ?>
       <!-- Start from here -->
       <?php 
	   		include_once("connection.php");
	   		$id=$_GET['id'];
			$sql = "select * from cardtype where Ctype_id=:id";
			$stmt = $con->prepare($sql);
			$stmt->bindParam(":id",$id);
			$stmt->execute();
			$row=$stmt->fetch(PDO::FETCH_ASSOC);			
	   ?>       
       <div class="jumbotron container panel panel-success" align="center">
       	<div class="panel-heading" align="center" style="font-family:Geneva, Arial, Helvetica, sans-serif; font-size:24px; font-weight:100">
        	<strong> Update Item </strong>
        </div> <div style="position:relative; height:30px;"> </div> 
       		<form class="form-horizontal" action="wk_update_ctype.php" method="post">
        		<strong style="font-size:20px;">Card Type : </strong>
                <input type="text" placeholder="<?php echo $row['Card_type']; ?>" name="name" id="name"/>&nbsp;&nbsp;&nbsp;
        		<input class="btn-primary" style="border-radius:10px; font-size:18px; margin-top:5px" type="submit" value="Update"/>
                <input type="hidden" name="id" value="<?php echo $row['Ctype_id']; ?>" />      
       		</form>
       </div>
       <!--Stop here -->	
</body>
</html>
