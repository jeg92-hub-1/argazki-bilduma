XMLHttpRequestObject = new XMLHttpRequest();

function nickKonprobatu(nick){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("mezua").innerHTML=XMLHttpRequestObject.responseText;
			//botoiagaitu();
		}
	}
	XMLHttpRequestObject.open("GET","./service/nickKonprobatu.php?NICK="+nick, true);
	XMLHttpRequestObject.send();
}