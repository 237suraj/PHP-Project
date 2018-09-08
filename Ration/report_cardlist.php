<?php 
session_start();
if(isset($_SESSION['username']))
{
include("top.php"); ?>
       <!-- Start from here -->
       <div class="container well"> 
       		 <table align="center" style="font-size:18px"> 
                    	<tr height="40px"><td align="right"><strong> Circle Name : </strong></td> 
                        <td>&nbsp;<select name="cid" onChange="getVillage(this.value);" onFocus="getVillage(this.value);" style="width:210px" >
                        		<option value="0">-select circle-</option> 
                                <?php
									include_once("Connection.php");	
									$qry="select * from circle where Status=1";
									$stmt = $con->prepare($qry);
									$stmt -> execute();
									while($row=$stmt->fetch(PDO::FETCH_ASSOC))
									{ ?>
										<option value="<?php echo $row['Circle_id'];?>"><?php echo $row['Circle_name'];?></option>	                                 
                                <?php	}
                                ?> 
                             </select>		 
                        </td></tr> 
                        <tr height="40px"><td align="right"><strong> Village Name : </strong></td> 
                        <td>&nbsp;<select name="vid" id="villageid" style="width:210px" onChange="getcard_list(this.value);"> 
                        		<option value="0">-select village-</option>
                               
                             </select>		 
                        </td></tr> 
                    </table>    
               <div id="cardlist"></div>
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
