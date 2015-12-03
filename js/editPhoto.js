
$(document).ready(function() {
        $("#content1 div").hide();
        $("#tabs li:first").attr("id","current");
        $("#content1 div:first").fadeIn();

 
    $('#tabs a').click(function(e) {
        e.preventDefault();
        $("#content1 div").hide();
        $("#tabs li").attr("id","");
        $(this).parent().attr("id","current");
        $('#' + $(this).attr('title')).fadeIn();
		/*
		XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("cb_album2").innerHTML="";
		alert('adfsf');
		
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("cb_album2").innerHTML=XMLHttpRequestObject.responseText;
			}
		}
		XMLHttpRequestObject.open("GET","./php/erab/cb_albumak.php", true);
		XMLHttpRequestObject.send();
		*/
		
    });
})();

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
		alert(XMLHttpRequestObject.readyState +"/"+albumizenburu);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("cb_argazkiak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/erab/cb_argazkiakAJAX.php?albumIzenburua="+albumizenburu, true);
	XMLHttpRequestObject.send();
}

function gordeIrudia(){
	var albumIzenburua = document.getElementById('cb_album').value;
	var egoera = document.getElementById('cb_egoera').value;
	var etiketa = document.getElementById('etiketa').value;
	var irudia = document.getElementById('thumbnil').src;
	//alert(albumIzenburua + "/"+egoera+"/"+etiketa+"/"+irudia);

	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		//document.getElementById("mezuaGehituDa").innerHTML="";
		alert(albumIzenburua + "/"+egoera+"/"+etiketa+"/"+irudia);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			//document.getElementById("mezuaGehituDa").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/irudiaGehitu.php?IZENBURUA="+albumIzenburu+"&EGOERA="+egoera+"&ETIKETA="+etiketa+"&IRUDIA="+irudia, true);
	XMLHttpRequestObject.send();
}
