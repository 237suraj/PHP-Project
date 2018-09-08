<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
       <!-- Start from here -->
       <div class="container">
       <form action="wk_signup.php" method="post">
       <div class="panel panel-success">
       	<div class="panel-heading" align="center" style="font-size:30px; color:#6600CC"><strong> Create New Shopkeeper </strong></div>
        <div class="panel-body">
        	<div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Registration No. : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="text" name="regno" style="width:240px" required/></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Username : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="text" name="user" style="width:240px" required/></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Password : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="password" name="pass" style="width:240px" required/></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Shop Name : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="text" name="shopname" style="width:240px" onkeypress='return lettersOnly(event)' required/></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Circle : </strong></div>                
                <div class="col-sm-5 col-lg-3"> <select name="circle" id="cid" onChange="getVillage(this.value);" onFocus="getVillage(this.value);"  style="width:240px">
                	<option value="0">- Select Circle --</option>
                    <?php 
					include_once("connection.php");
					$str = "select * from circle";
					$stmt = $con->prepare($str);
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{?><option value="<?php echo $row["Circle_id"];?>"><?php echo $row["Circle_name"];?></option><?php	}?></select>           
                </div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
             <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Village : </strong></div>                
                <div class="col-sm-5 col-lg-3"><select name="vid" id="villageid"  style="width:240px" onfocus="return checkcir()">
                	<option value="0">- Select Village -</option>
                	</select>
                </div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Shopkeeper Name : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="text" name="name" style="width:240px" onkeypress='return lettersOnly(event)' onblur="return check()" required/></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong> Email : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="email" name="email" style="width:240px" required/></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 pull-left col-lg-3" align="right"><strong>  Mobile No. : </strong></div>                
                <div class="col-sm-5 col-lg-3"><input type="text" maxlength="10" name="mob" id="mob" style="width:240px" 
                	onblur="chmb(this)" onkeypress='return isNumberKey(event)' require /></div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
            <div class="row" style="height:45px">
                <div class="col-sm-1 col-lg-3"></div>
                <div class="col-sm-5 col-lg-3"></div>                
                <div class="col-sm-5 col-lg-3">
                	<input class="btn-success" type="submit" name="save" value="Save" onclick="return check()" style="font-size:18px; margin:5px; border-radius:12px" />
                	<input class="btn-warning" type="reset" name="cancel" value="Cancel" style="font-size:18px; margin:5px; border-radius:12px"/>
                </div>
                <div class="col-sm-1 col-lg-3"></div>
            </div>
        </div>
       </div>
       </form>          
       </div> 
       <!--Stop here -->		
</body>
<script src="js/valid.js"> </script>
<script language="javascript"> 
	function checkcir()
	{
		var cid = document.getElementById('cid').value;
	
		if(cid==0)
		{
			var msg = "Please select Circle";
			//msg.innerHTML = "<strong> Please select circle </strong>";
			alert(msg);
			return false;
		}
	}
	
	function check()
	{
		var cid = document.getElementById('cid').value;
		var vid = document.getElementById('vid').value;
		if(cid==0)
		{
			var msg = "Please select Circle";
			//msg.innerHTML = "<strong> Please select circle </strong>";
			alert(msg);
			return false;
		}
		else if(vid==0)
		{
			var msg = "Please select Village";
			//msg.innerHTML = "<strong> Please select circle </strong>";
			alert(msg);
			return false;
		}
		return true;
	}
</script>


</html>
<?php
}
else
{
	echo "<script> alert(' Please login First '); </script>";
	header("refresh:0;url=index.php");
}?>
