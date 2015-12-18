XMLHttpRequestObject = new XMLHttpRequest();

/*Erabiltzaileentzako funtzioak*/
function bistaratuDeskribapenaEtaAlbuma(izenburua){
	
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("deskribapena").innerHTML="";
		
		document.getElementById("carousel").innerHTML="";
	
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split("&&&");
			document.getElementById("deskribapena").innerHTML=array[0];
			document.getElementById("carousel").innerHTML=array[1];
			
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiDeskribapenaEtaAlbuma.php?IZENBURUA="+izenburua.value+"&EGOERA=carouselakin", true);
	XMLHttpRequestObject.send();
}

function AlbumakKargatu(){
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


/*Admin-entzako funtzioak*/
function datuakKargatu(egoera){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById('cb_user').innerHTML = XMLHttpRequestObject.responseText;

		}
	}
	XMLHttpRequestObject.open("GET","./php/cb_erabiltzaileaKargatu.php?EGOERA="+egoera, true);
	XMLHttpRequestObject.send();
}

function erakutsiAlbumak(nick){
		
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("cb_album").innerHTML="";
		document.getElementById("deskribapena").innerHTML="";
		document.getElementById("carousel").innerHTML="";
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("cb_album").innerHTML= XMLHttpRequestObject.responseText;	
		}
	}
	XMLHttpRequestObject.open("GET","./php/cb_albumKargatu.php?NICK="+nick.value, true);
	XMLHttpRequestObject.send();
}


function bistaratuErabiltzailearenDatuak(izenburua,nick){
	
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("deskribapena").innerHTML="";
		
		document.getElementById("carousel").innerHTML="";
	
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split("&&&");
			document.getElementById("deskribapena").innerHTML=array[0];
			document.getElementById("carousel").innerHTML=array[1];
			
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiDeskribapenaEtaAlbuma.php?IZENBURUA="+izenburua.value+"&EGOERA=carouselakin&NICK="+nick, true);
	XMLHttpRequestObject.send();
}