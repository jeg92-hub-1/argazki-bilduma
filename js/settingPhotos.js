XMLHttpRequestObject = new XMLHttpRequest();

function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");
			img.style.display= 'block';
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }
}

/*removePhotos*/
function erakutsiArgazkiak(albumizenburu){

	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("cb_argazkiak").innerHTML="";
		
		document.getElementById("irudiaIkusi").innerHTML="";

		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("cb_argazkiak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/cb_argazkiakAJAX.php?albumIzenburua="+albumizenburu, true);
	XMLHttpRequestObject.send();
	
}
function argazkiaBistaratu(albumizenburu,etiketa){
	if(etiketa !='-'){
		XMLHttpRequestObject.onreadystatechange = function(){
			document.getElementById("irudiaIkusi").innerHTML="";
			if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
				var string=XMLHttpRequestObject.responseText;
				var array=string.split('&');
				document.getElementById('irudiaIkusi').innerHTML=array[0];
				document.getElementById(array[1]).checked = true;
				document.getElementById("etiketa").value=etiketa;
			}
		}
		XMLHttpRequestObject.open("GET","./php/erakutsiArgazkia.php?albumIzenburua="+albumizenburu+"&etiketa="+etiketa, true);
		XMLHttpRequestObject.send();
	}else{
		document.getElementById("irudiaIkusi").innerHTML="";
		document.getElementById("etiketa").value="";
		document.getElementById('PUB').checked=false;
		document.getElementById('PRI').checked=false;
		document.getElementById('MUG').checked=false;	
	}
}

function erakutsiNireArgazkiak(egoera){
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("carousel").innerHTML="";
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("carousel").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/nireArgazkiakerakutsi.php?EGOERA="+egoera.value, true);
	XMLHttpRequestObject.send();
}

function bisitaGehitu(img){
	var info=img.getAttribute('alt');

	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
		}
	}
	XMLHttpRequestObject.open("GET","./php/bisitaGehitu.php?INFO="+info, true);
	XMLHttpRequestObject.send();
}