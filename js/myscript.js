XMLHttpRequestObject = new XMLHttpRequest();

function nickKonprobatu(nick){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("mezua").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	
	XMLHttpRequestObject.open("GET","./service/nickKonprobatu.php?NICK="+nick.value, true);
	XMLHttpRequestObject.send();
}

function pasahitzaBalidatu(pasahitza,pasahitza1){
	document.getElementById("mezua").innerHTML="";
	if(pasahitza == pasahitza1){
		XMLHttpRequestObject = new XMLHttpRequest();
		XMLHttpRequestObject.onreadystatechange = function(){
			if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
				document.getElementById("mezua").innerHTML=XMLHttpRequestObject.responseText;
			}
		}
	XMLHttpRequestObject.open("GET","./php/pasahitzaBalidatuAJAX.php?PASAHITZA="+pasahitza+"&PASAHITZA1="+pasahitza1, true);
	XMLHttpRequestObject.send();
	}else{
		document.getElementById("mezua").innerHTML="<h2 style='color:red;font-size:1.6em;'> Ez dira berdinak!</h2>";
	}
}