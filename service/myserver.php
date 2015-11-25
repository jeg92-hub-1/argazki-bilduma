<?php
//call library 
require_once ('lib/nusoap.php');
require_once('lib/class.wsdlcache.php'); 


$ns="http://localhost/argazkiBilduma/service/myserver.php?wsdl";  //nameof the service
//$ns="http://azkenpraktika.hol.es/argazkiBilduma/sevice/myservice.php?wsdl";  //nameof the service
//using soap_server to create server object 
$server = new soap_server; 
$server->configureWSDL('nickKonprobatu',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('nickKonprobatu',array('nick'=>'xsd:string'),array('erantzuna'=>'xsd:string'),$ns); 

// create the function 
function nickKonprobatu($nick) { 
	
	
} 
// create HTTP listener 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA); 
exit(); 
?>  
