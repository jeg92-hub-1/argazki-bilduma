XMLHttpRequestObject = new XMLHttpRequest();

function bistaratuErabiltzaileInfo(nick){
		XMLHttpRequestObject.onreadystatechange = function(){
	
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			//document.getElementById("deskribapena").innerHTML=XMLHttpRequestObject.responseText;

			var string = XMLHttpRequestObject.responseText;
			var array=string.split('&');
			document.getElementById('nick').value=array[0];
			document.getElementById('password').value=array[1];
			document.getElementById('izena').value=array[2];
			document.getElementById('abizenak').value=array[3];
			document.getElementById('email').value=array[4];
			
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiErabiltzaileInfo.php?NICK="+nick.value+"&EGOERA=carouselakin", true);
	XMLHttpRequestObject.send();
}

function datuakKargatu(){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById('cb_user').innerHTML = XMLHttpRequestObject.responseText;

		}
	}
	XMLHttpRequestObject.open("GET","./php/cb_erabiltzaileaKargatu.php", true);
	XMLHttpRequestObject.send();
}

function bistaratuErabiltzaileDatuak(nick){
		XMLHttpRequestObject.onreadystatechange = function(){
	
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			//document.getElementById("deskribapena").innerHTML=XMLHttpRequestObject.responseText;

			var string = XMLHttpRequestObject.responseText;
			var array=string.split('&');
			if(array[0] == ''){
				document.getElementById("balidatu").style.background= "#A5A5A5";
				document.getElementById("balidatu").disabled = true;
			}else{
				document.getElementById("balidatu").style.background= "grey";
				document.getElementById("balidatu").disabled = false;
			}
			document.getElementById('nick').value=array[0];
			document.getElementById('password').value=array[1];
			document.getElementById('izena').value=array[2];
			document.getElementById('abizenak').value=array[3];
			document.getElementById('email').value=array[4];

			
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiErabiltzaileInfo.php?NICK="+nick.value+"&EGOERA=carouselakin", true);
	XMLHttpRequestObject.send();
}
