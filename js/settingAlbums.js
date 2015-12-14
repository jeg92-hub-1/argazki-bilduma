XMLHttpRequestObject = new XMLHttpRequest();

function bistaratuDeskribapenaEtaAlbuma(izenburua){
	
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("deskribapena").innerHTML="";
		
		document.getElementById("carousel").innerHTML="";
	
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			//document.getElementById("deskribapena").innerHTML=XMLHttpRequestObject.responseText;

			var string = XMLHttpRequestObject.responseText;
			var array=string.split("&&&");
			document.getElementById("deskribapena").innerHTML=array[0];
			document.getElementById("carousel").innerHTML=array[1];
			
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiDeskribapenaEtaAlbuma.php?IZENBURUA="+izenburua.value+"&EGOERA=carouselakin", true);
	XMLHttpRequestObject.send();
}

function datuakKargatu(){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById('cb_album').innerHTML = XMLHttpRequestObject.responseText;

		}
	}
	XMLHttpRequestObject.open("GET","./php/cb_albumKargatu.php", true);
	XMLHttpRequestObject.send();
}

function erakutsiDeskribapena(izenburua){
	
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("deskribapena").innerHTML="";
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("deskribapena").innerHTML= XMLHttpRequestObject.responseText;
			
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiDeskribapenaEtaAlbuma.php?IZENBURUA="+izenburua.value+"&EGOERA=carouselgabe", true);
	XMLHttpRequestObject.send();
}