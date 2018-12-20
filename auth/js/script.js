var xmlhttp = new XMLHttpRequest();

function checknow(whr,val,output)
{

	var serverPage = "../app/ajax.php?" + whr + "=" + document.getElementById(val).value;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById(output).innerHTML = xmlhttp.responseText;
			if(who == "msgp") setTimeout(check,9600,whr,who);
		}
			
	}
	xmlhttp.send(null);
}
