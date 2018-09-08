<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-state=1" />
<script type="text/javascript" src="js/Jquery.js"> </script>
<script type="text/javascript" src="js/bootstrap.js"> </script>
<script language="javascript" src="js/datepicker.min.js"></script>
<script language="javascript" src="js/datepicker.en.js"></script>
<script language="javascript" src="js/valid.js"></script>
<script language="javascript" src="js/ajaxJs.js"></script>
<link rel="stylesheet" type="text/css" href="css/Mystyle.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/datepicker.min.css" />

</head>
<body>
	<div class="bg-img"><img src="img/back2.jpg" style="width:100%; height:100%;" /></div>
	<div class="container-fluid" >
		<div class="bg-warning"  style="background:#6699CC"><center>
			<img class="ashok" src="img/ss.gif"/>
			<img class="webname" src="img/pro.png"/>
			<img class="ashoks" src="img/ss.gif"/>
            <img class="webnm" src="img/pros.png" /></center>
		</div> 
		<nav class="navbar navbar-default" >
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#suraj" style="margin-right:30px">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" >
					<ul class="nav navbar-nav">
					<li style="font-size:20px"><a href="adminhome.php"><span class="glyphicon glyphicon-home"></span><strong> Home </strong></a></li>
					<li class="dropdown" style="font-size:20px"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-th-list"></span><strong> Masters <span class="caret"></span></strong></a>
                    	<ul class="dropdown-menu divider">
							<li><a href="circle.php"><strong><center> Circle </center></strong></a></li>
                            <center><img src="img/line.png" width="150px"/></center>
   							<li><a href="village.php"><strong><center>  Village </center></strong></a></li>
                            <center><img src="img/line.png" width="150px"/></center>
							<li><a href="item.php"><strong><center>  Item </center></strong></a></li>
                            <center><img src="img/line.png" width="150px"/></center>
                           
                            <center><img src="img/line.png" width="150px"/></center>
                            <li><a href="ctype.php"><strong><center>  Card Type </center></strong></a></li>
                            <center><img src="img/line.png" width="150px"/></center>
                            <li><a href="rate.php"><strong><center>  Item Rate </center></strong></a></li>
                            <center><img src="img/line.png" width="150px"/></center>
                        </ul>
                    </li>
                    <li class="dropdown" style="font-size:20px"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-bell"> </span><strong> Features <span class="caret"></span> </strong></a>
                    	<ul class="dropdown-menu">
							<li class="dropdown dropdown-submenu"><a href="#"><strong><center> Stock </center></strong></a>
                            	<ul class="dropdown-menu">
                            		<li><a href="admin_purchase.php"><strong><center> Admin Purchase </center></strong></a></li>
                            		<center><img src="img/line.png" width="150px"/></center>
                            		<li><a href="admin_sale.php"><strong><center>  Admin Sell </center></strong></a></li>
                            	</ul>                            
                            </li>
                            <center><img src="img/line.png" width="160px"/></center>
                             <li class="dropdown dropdown-submenu"><a href="#">
                            	<strong><center>  Cards </center></strong></a>
                               	<ul class="dropdown-menu">
                            		<li><a href="card.php"><strong><center>  Add new Card </center></strong></a></li>
                            		<center><img src="img/line.png" width="150px"/></center>
                            		<li><a href="update_card.php"><strong><center>  Upadate Card </center></strong></a></li>
                            	</ul>
                            </li>
   							<li><a href="scheme.php"><strong><center> Schemes </center></strong></a></li>
                            <center><img src="img/line.png" width="160px"/></center>
							<li><a href="signup.php"><strong><center> create user </center></strong></a></li>
                            <center><img src="img/line.png" width="160px"/></center>
                        </ul>
                    </li>
					<li class="dropdown" style="font-size:20px"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-book"></span><strong> Report <span class="caret"></span> </strong></a>
                    	<ul class="dropdown-menu">
							<li><a href="report_cardlist.php"><strong><center> cards </center></strong></a></li>
                            <center><img src="img/line.png" width="140px"/></center>
   							<li class="dropdown dropdown-submenu"><a href="#"><strong><center> Stock </center></strong></a>
                            	<ul class="dropdown-menu">
                            		<li><a href="report_adminstock.php"><strong><center>  Admin Stock </center></strong></a></li>
                            		<center><img src="img/line.png" width="150px"/></center>
                            		<li><a href="report_userstock.php"><strong><center>  shopkeeper Stocks </center></strong></a></li>
                            	</ul>
                            
                            </li>
                            <center><img src="img/line.png" width="140px"/></center>
							<li><a href="request.php"><strong><center> Request </center></strong></a></li>
                            <center><img src="img/line.png" width="140px"/></center>
                            
                            <li><a href="bill.php"><strong><center> Bill </center></strong></a></li>
                            <center><img src="img/line.png" width="140px"/></center>
                            
                        </ul>
                    </li>
    				</ul>
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="signup.php"><strong><span class="glyphicon glyphicon-user"> </span> Add New Shopkeeper </strong></a></li>              
						<li><a href="Logout.php" style="color:#FFFFFF"><strong> Log Out </strong><span class="glyphicon glyphicon-off"> </span></a></li>
                    	<li> &nbsp;&nbsp;&nbsp;&nbsp; </li>
                    </ul>
				</div>
			</div>
		</nav>
    </div>		

