<?php
//call library 
require_once ('lib/nusoap.php');
require_once('lib/class.wsdlcache.php'); 


$ns="http://localhost/argazkiBilduma/service/myserver.php?wsdl";
 //$ns="http://jonazkenpraktika.hol.es/argazkiBilduma/service/myserver.php?wsdl";
$server = new soap_server; 
$server->configureWSDL('konprobatu',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('nickKonprobatu',array('nick'=>'xsd:string'),array('erantzuna'=>'xsd:string'),$ns); 
$server->register('emailKonprobatu',array('email'=>'xsd:string'),array('erantzuna'=>'xsd:string'),$ns); 

// create the function 
function nickKonprobatu($nick) {
	$irten=FALSE;
	$file = fopen("../file/nick.txt","r");
	while(!feof($file) && $irten==FALSE){
		$lerroa=trim(fgets($file));
		if(strcmp($lerroa,$nick)==0){
			$irten=TRUE;		
		}
	}
	fclose($file);
	
	if($irten==TRUE){
		return "EXISTITZENDA";
	}
}

function emailKonprobatu($email){
	$irten=FALSE;
	$file = fopen("../file/email.txt","r");
	while(!feof($file) && $irten==FALSE){
		$lerroa=trim(fgets($file));
		if(strcmp($lerroa,$email)==0){
			$irten=TRUE;		
		}
	}
	fclose($file);
	
	if($irten==TRUE){
		return "EXISTITZENDA";
	}
}
 
// create HTTP listener 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA); 
exit();
?>  
