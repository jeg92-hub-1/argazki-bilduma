XMLHttpRequestObject = new XMLHttpRequest();

function nickKonprobatu(nick){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split("&");
			document.getElementById("mezua").innerHTML=array[0];
			if(array[1]=='O'){
				document.getElementById("submitbtn").style.background= "grey";
				document.getElementById("submitbtn").disabled = false;
			}else{
				document.getElementById("submitbtn").disabled = true;
				document.getElementById("submitbtn").style.background= "#A5A5A5";
			}
		}
	}
	
	XMLHttpRequestObject.open("GET","./service/nickKonprobatu.php?NICK="+nick.value, true);
	XMLHttpRequestObject.send();
}

function emailKonprobatu(email){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split("&");
			document.getElementById("mezua").innerHTML=array[0];
			if(array[1]=='O')
				document.getElementById("submitbtn").disabled = false;
			else{
				document.getElementById("submitbtn").disabled = true;
				document.getElementById("submitbtn").style.background= "#A5A5A5";
			}
		}
	}
	
	XMLHttpRequestObject.open("GET","./service/emailKonprobatu.php?EMAIL="+email.value, true);
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
	XMLHttpRequestObject.open("GET","./service/pasahitzaKonprobatu.php?PASAHITZA="+pasahitza+"&PASAHITZA1="+pasahitza1, true);
	XMLHttpRequestObject.send();
	}else{
		document.getElementById("mezua").innerHTML="<h2 style='color:red;font-size:1.6em;'> Ez dira berdinak!</h2>";
	}
}