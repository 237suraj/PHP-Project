<?php 
	include_once("Connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-state=1" />
<script type="text/javascript" src="js/Jquery.js"> </script>
<script type="text/javascript" src="js/bootstrap.js"> </script>
<script type="text/javascript" src="js/Myjs.js"> </script>
<link rel="stylesheet" type="text/css" href="css/Mystyle.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div class="bg-img"><img src="img/back2.jpg" style="width:100%; height:100%;" /></div>
	<div class="container-fluid">
    	<!--<div class="bg-warning"  style="background:url(img/wood.jpg)"><center>-->
        <div class="bg-warning"  style="background:#993366"><center>
			<img class="ashok" src="img/ss.gif"/>
			<img class="webname" src="img/pro.png"/>
			<img class="ashoks" src="img/ss.gif"/>
            <img class="webnm" src="img/pros.png" /></center>
		</div>
		<nav class="navbar navbar-default">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#suraj">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="suraj">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> </span><strong> Home </strong></a></li> 
						<li><a href="contact.php"><span class="glyphicon glyphicon-user"> </span><strong> Contact Us </strong></a></li>
						<li><a href="about.php"><span class="glyphicon glyphicon-comment"> </span><strong> About Us </strong></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row">
			<div class="col-sm-8 col-lg-8">
				<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
					<div class="carousel-inner"> 
					<div class="item active"> <img src="img/slide/top1.jpg" /></div>
					<div class="item"> <img src="img/slide/card1.jpg" /></div>
					<div class="item"> <img src="img/slide/Herbs1.jpg" /></div>
					<div class="item"> <img src="img/slide/card2.jpg" /></div>
					<div class="item"> <img src="img/slide/ration1.jpg" /></div>
					</div>
					<a class="left carousel-control" href="#mycarousel" role="buttan" 
					data-slide="prev"><span class="glyphicon glyphicon-chevron-left"> </span></a>
					<a class="right carousel-control" href="#mycarousel" role="buttan"
					data-slide="next"><span class="glyphicon glyphicon-chevron-right"> </span></a>
				</div>
			</div>
			<div class="col-sm-4 col-lg-4">
				<div class="panel panel-success" >
						<div class="panel-heading" style="font-size:26px;"><center><strong>Login Here</strong></center></div>
					<div class="panel-body">
					<form method="post" action="login.php"><center>
						<div class="row" style="margin:5px; padding:5px"> Username : 
							<input class="input-group-sm" type="text" name="username" required/>
						</div>
						<div class="row" style="margin:5px; padding:10px"> Password :  
							<input class="input-group-sm" type="password" name="password" required/>
						</div>
						<div class="row" style="margin:5px; padding:10px">&emsp;&emsp;&emsp;&emsp;&emsp;
                        	<input type="submit" name="login" value="Login" class="bg-primary" style="font-size:20px" />&emsp;
							<input type="reset" name="cancel" value="Cancel" class="btn-danger" style="font-size:20px" />
						</div>
						</center>	
					</form>
					</div>
				</div>
			</div>
		</div>
        <div style="position:relative; height:10px"></div>
		<div class="row">
			<div class="col-sm-12 col-lg-8 col-md-8">
            <div class="panel panel-primary">
            	<div class="panel-heading" style="font-size:26px"><strong>Introduction</strong></div>
                <div class="panel-body">
				                
                <h4 style="margin-top:30px; font-style:italic;"> Introduction to Project  </h4>
                
                	<img src="img/go.png" width="18"  />
                	<ul style="text-align:justify;">For developing this project we used “HTML & PHP as an application language”. The project uses “My sql” To store the particular records. This section gives introduction of overall system, data requirements and the tables.
                    </ul>
                    
                    <img src="img/go.png" width="18"  />
                	<ul style="text-align:justify">This project is prepared in HTML and my sql takes care of the particular process of particles and their Issue & Return Details.
                    </ul>
                    
                    <img src="img/go.png" width="18"  />
                	<ul style="text-align:justify">The project takes care about the security or the protection of data that cannot access the data.
                    </ul>
                
               <!-- 
			    style="text-align:justify;color:#FFFFFF; background-color:rgba(225,255,25,0.3);
			   <?php /* include("file.php"); 
					$kv_texts = kv_read_word('doc\suraj.docx');
					if($kv_texts !== false)
					{
						echo nl2br($kv_texts);
					}
					else
					{
						echo "Can't Read that file.";
					}*/

				?>-->
                </div>
            </div>
			</div>
			<div class="col-sm-12 col-lg-4 col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading" style="font-size:26px"><center><strong>New Schemes</strong></center></div>
					<div class="panel-body">
                    	<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
						<div id="vmarquee" style="position:absolute; width:99%;">
						<ul class="nav" style="text-align:center;">
                        	<?php 
								include_once("Connection.php");
								$qry="select * from scheme where Status=1";
								$stmt=$con->prepare($qry);
								$stmt->execute();				
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{ ?>
									  <li style="height:30px"><a href="schemedetail.php?name=<?php echo $row['Scheme_name'];?>&sid=<?php echo $row['Scheme_id'];?>&path=<?php echo $row['Description_path'];?>"><?php echo $row['Scheme_name'];?></a></li>
                      
							<?php }?>         
						</ul>
                        </div></div>
					</div>
				</div>
			</div>
		</div>
	</div>		
</body>
</html>
