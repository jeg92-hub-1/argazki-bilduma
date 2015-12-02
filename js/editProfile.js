XMLHttpRequestObject = new XMLHttpRequest();

function datuakKargatu(){
	var nick=document.getElementById('nick');
	var pasahitza=document.getElementById('password');
	var izena=document.getElementById('izena');
	var abizenak = document.getElementById('abizenak');
	var email = document.getElementById('email');
	
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split(";");
			nick.value = array[0];
			pasahitza.value=array[1];
			izena.value=array[2];
			abizenak.value=array[3];
			email.value=array[4];
		}
	}
	XMLHttpRequestObject.open("GET","./php/profilaKargatu.php", true);
	XMLHttpRequestObject.send();
}

function gordeDatuak(){
	var nick=document.getElementById('nick').value;
	var pasahitza=document.getElementById('password').value;
	var izena=document.getElementById('izena').value;
	var abizenak = document.getElementById('abizenak').value;
	var email = document.getElementById('email').value;
	document.getElementById("mezua").innerHTML="";
	
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("mezua").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/ProfilaEditatu.php", true);
	XMLHttpRequestObject.send();
}


function pasahitzaBalidatu(pasahitza){
	document.getElementById("mezua").innerHTML="";
	
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("mezua").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/pasahitzaBalidatuAJAX.php?PASAHITZA="+pasahitza+"&PASAHITZA1="+pasahitza, true);
	XMLHttpRequestObject.send();
	
}