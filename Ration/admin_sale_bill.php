<?php 
	session_start();
if(isset($_SESSION['username']))
{ 
include("top.php"); ?>
<link rel="stylesheet" type="text/css" href="css/Mystyle.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Start from here -->
       <div class="con1 divmatch">
       <h2 align="center" style="background-color:#FF9933;" >  Bill </h2>
       
       <table align="center" style="font-size:18px">
       		<tr height="40px"><td align="right"><strong> Date : </strong></td>
            	<td>&nbsp;&nbsp;<input type="text" name="date" id="date" onkeypress='return NotNumLetter(event)' 
                class="datepicker-here" data-language="en" data-date-format="yyyy/mm/dd" onblur="getShopkeeperbydate(this.value)"  required/></td>
       	    </tr>
             <tr height="40px"><td align="right"><strong>Shop Name : </strong></td>
            	<td>&nbsp;&nbsp;<select name="shopname" id="shopname" style="width:210px" onblur="getBill(this.value)">
                	<option value="0">- Select Shop Name -</option>
                	</select></td>
            </tr>
       </table>
      	 <div id="bill"></div>
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