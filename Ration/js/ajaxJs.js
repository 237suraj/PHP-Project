function getVillage(circleid)
{
	//console.log(circleid);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("villageid").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getVillage.php?circleid="+circleid+"&t="+Math.random(),true);
	xmlhttp.send();
}


function getCard(cardno)
{
	//console.log(circleid);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("records").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getCard.php?cn="+cardno+"&t="+Math.random(),true);
	xmlhttp.send();
}


function getRequestdetail(vid)
{
	//console.log(circleid);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("requestdetail").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getRequest.php?vid="+vid+"&t="+Math.random(),true);
	xmlhttp.send();
}

function getcard_list(villageid)
{
	//console.log(circleid);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("cardlist").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getCard_list.php?vid="+villageid+"&t="+Math.random(),true);
	xmlhttp.send();
}

function getShopkeeper(vid)
{
	//console.log(circleid);
	//alert('shopkeeper called ');
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("regno").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getShopkeeper.php?vid="+vid+"&t="+Math.random(),true);
	xmlhttp.send();
}

function getShopkeeperbydate(date)
{
	//console.log(circleid);
	//alert('shopkeeper called ');
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("shopname").innerHTML=xmlhttp.responseText;
					//alert('shopname');
		}
	}
	xmlhttp.open("GET","getShopkeeperbydate.php?date="+date+"&t="+Math.random(),true);
	xmlhttp.send();
}


function getOrderno(regno)
{
	//console.log(circleid);
	//alert('Order no ');
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("orderno").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getOrderno.php?regno="+regno+"&t="+Math.random(),true);
	xmlhttp.send();
}

function getItemname(orderno)
{
	//console.log(circleid);
	//alert('Item name ');
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("adminsale").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getItemname.php?orderno="+orderno+"&t="+Math.random(),true);
	xmlhttp.send();
}


function getBill(regno)
{
	//console.log(circleid);
	//alert('Item name ');
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("bill").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","getBill.php?regno="+regno+"&t="+Math.random(),true);
	xmlhttp.send();
}


function getStock(sid,fd,td)
{
	//alert("hi in getstock"+sid);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
				//	alert("in response"+xmlhttp.status);
					document.getElementById("rec").innerHTML=xmlhttp.responseText;
		}
		else{
					alert("No data to display");
			}
	}
	if(sid=="-1")
	{
	xmlhttp.open("GET","getadminstock.php?fd="+fd+"&td="+td+"&t="+Math.random(),true);
	}
	else
	{
	xmlhttp.open("GET","getuserstock.php?sid="+sid+"&fd="+fd+"&td="+td+"&t="+Math.random(),true);
	}
	xmlhttp.send();
}

function showVillage(circleid)
{
	//console.log(circleid);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			// Do stuff when script returns
			
					document.getElementById("showVillage").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","showVillage.php?circleid="+circleid+"&t="+Math.random(),true);
	xmlhttp.send();
}
