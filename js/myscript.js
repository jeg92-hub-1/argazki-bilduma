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
			if(array[1]=='O'){
				document.getElementById("submitbtn").style.background= "grey";
				document.getElementById("submitbtn").disabled = false;
			}else{
				document.getElementById("submitbtn").disabled = true;
				document.getElementById("submitbtn").style.background= "#A5A5A5";
			}
		}
	}
	XMLHttpRequestObject.open("GET","./service/emailKonprobatu.php?EMAIL="+email.value, true);
	XMLHttpRequestObject.send();
}

function lehenengoPasahitzaBalidatu(pasahitza){
	document.getElementById("mezua").innerHTML="";
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200)){
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
	XMLHttpRequestObject.open("GET","./service/pasahitzaKonprobatu.php?PASAHITZA="+pasahitza.value, true);
	XMLHttpRequestObject.send();
}

function pasahitzakBalidatu(pasahitza,pasahitza1){
	document.getElementById("mezua").innerHTML="";
	if(pasahitza == pasahitza1){
		document.getElementById("submitbtn").style.background= "grey";
		document.getElementById("submitbtn").disabled = false;
		document.getElementById("mezua").innerHTML="<h3 style='color:green;'>Berdinak</h3>";
	}else{
		document.getElementById("mezua").innerHTML="<h3 style='color:red;'> Ez dira berdinak!</h3>";
		document.getElementById("submitbtn").disabled = true;
		document.getElementById("submitbtn").style.background= "#A5A5A5";	
	}
}