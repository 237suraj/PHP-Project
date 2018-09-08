function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
	    return false;
    return true;
	}
	
	
function lettersOnly(evt) 
	{
            var charCode = (evt.which) ? evt.which : evt.keyCode;
			console.log(charCode);
			if ((charCode > 64 && charCode < 125)||(charCode > 35 && charCode < 40) || charCode==8 || charCode==46 || charCode==9 || charCode==32 )
				return true;
         return false;
	}

function NotNumLetter(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode ==9)
	    return true;
	return false;
	}



function chmb(field)
{
	
	var str=field.value;
	var len=str.length;
		if(len!=10)
		{
			alert ("Enter 10 digit mobile number");
			document.getElementById("")
			document.getElementById("mob").focus();
		}
		else
		{
			//alert("ok");
			if(str.startsWith('0')||str.startsWith('1')||str.startsWith('2')||str.startsWith('3')||str.startsWith('4')||str.startsWith('5')||str.startsWith('6'))
			{
				alert("Enter valid mobile number");
				document.getElementById("")
				document.getElementById("mob").focus();
			}
		}
		
}

function cal()
{
	var a= document.getElementById("Adult").value;
	var c= document.getElementById("Child").value;
	var t= (parseInt(a)*2)+parseInt(c);
	document.getElementById("Total_unit").value=t;
}
		
function calamount()
{
	
	var q= document.getElementById("quantity").value;
	var r= document.getElementById("rate").value;
	var a=(parseInt(q)*parseInt(r));
	document.getElementById("amount").value=a;
}

function checkctype_getcard() 
{  
 	var ctype=document.getElementById['ctype'].value;
	if (ctype==0)
	{
		alert ('please select card type');
		return false;
	}
	return true;
}
			
 	