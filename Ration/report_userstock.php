<?php session_start();
if(isset($_SESSION['username']))
{

 include("top.php"); ?>
       <!-- Start from here -->
       <script>
	   function showstock()
	   {
	   		var fd = document.getElementById("fdate").value;
			var td = document.getElementById("tdate").value;
	   		var shopid = document.getElementById("shopname").value;
		//	alert("hi"+shopid);
			if(shopid>0)
			{
				if((fd!="")&&(td!=""))
				{
					getStock(shopid,fd,td);
				}
				else
				{
					alert("Select Proper Dates");
				}
			}
			else if(shopid==0)
			{
				alert("first select shopkeeper and From Date - To Date");
			}
		}	
	   </script>
  <link rel="stylesheet" type="text/css" href="css/Mystyle.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Start from here -->
       <div class="con1 divmatch">
       <h2 align="center" style="background-color:#FF9933;" >  Item Stock </h2>
       
       <table align="center" style="font-size:18px">
       		
             <tr height="40px"><td align="right"><strong>Shop Name : </strong></td>
            	<td>&nbsp;&nbsp;<select name="shopname" id="shopname" style="width:210px" onblur="getid();" >
                	<option value="0">- Select Shop Name -</option>
                     <? 	include_once("connection.php");
					$query="SELECT Reg_no, Shop_name FROM login where status=1";
										$stmt=$con->prepare($query);
										$stmt->execute();
										while($row=$stmt->fetch(PDO::FETCH_ASSOC))
										{
    										?>	
       										<option value="<? echo $row["Reg_no"]?>"><? echo $row["Shop_name"]?></option>
								       <?
	   										}
	   									?>
                	</select></td>
            </tr>
            <tr height="40px"><td align="right"><strong> From Date : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="fdate" id="fdate" onkeypress='return NotNumLetter(event)' 
                class="datepicker-here" data-language="en" data-date-format="yyyy/mm/dd" onblur=""  required/></td>
                <td align="right"><strong> To Date : </strong>
                <td>&nbsp;&nbsp;<input type="text" name="tdate" id="tdate" onkeypress='return NotNumLetter(event)' 
                class="datepicker-here" data-language="en" data-date-format="yyyy/mm/dd" onblur=""  required/></td>
                <td><button id="btngo" name="btngo" onclick="showstock();">Go</button></td>
       	    </tr>
            
       </table>
     <br /><br />
            	 <div id="stock">
         	<table border="1" class="bg-info" align="center" width="75%" >
        	<tr align="center" style="font-size:20px; background-color:#FF9933">
            	<td width="150px;"> Item Code </td><td width="150px;"> Item Name </td><td width="150px;"> Quantity </td>
             </tr>
            
        </table>
       	<table id="rec" class="bg-info" border="1" align="center" width="75%" >
        	
        </table>
       
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
