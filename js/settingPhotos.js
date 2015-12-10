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

function erakutsiArgazkiak(albumizenburu){

	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("cb_argazkiak").innerHTML="";
		
		document.getElementById("irudiaIkusi").innerHTML="";
		//alert(XMLHttpRequestObject.readyState +"/"+albumizenburu);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("cb_argazkiak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/cb_argazkiakAJAX.php?albumIzenburua="+albumizenburu, true);
	XMLHttpRequestObject.send();
	
}
function argazkiaBistaratu(albumizenburu,etiketa){
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("irudiaIkusi").innerHTML="";
		//alert(XMLHttpRequestObject.readyState +"/"+albumizenburu);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("irudiaIkusi").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/erakutsiArgazkia.php?albumIzenburua="+albumizenburu+"&etiketa="+etiketa, true);
	XMLHttpRequestObject.send();
	
}

