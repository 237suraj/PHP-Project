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
			if ((charCode > 64 && charCode < 125)||(charCode > 35 && charCode < 40) || charCode==8 || charCode==46 || charCode==9 )
				return true;
         return false;
	}

function chmb(field)
{
	
	var str=field.value;
	var len=str.length;
		if(len>10)
		{
			alert ("invalid mobile");
			document.getElementById("")
			document.getElementById("mob").focus();
		}	
}

	function cal()
	{
		var a= document.getElementById("Adult").value;
		var c= document.getElementById("Child").value;
		var t= (parseInt(a)*2)+parseInt(c);
		document.getElementById("Total_unit").value=t;
	}
		