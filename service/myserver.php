<?php
//call library 
require_once ('lib/nusoap.php');
require_once('lib/class.wsdlcache.php'); 


$ns="http://localhost/argazkiBilduma/service/myserver.php?wsdl";
 
$server = new soap_server; 
$server->configureWSDL('konprobatu',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('konprobatu',array('nick'=>'xsd:string'),array('erantzuna'=>'xsd:string'),$ns); 

// create the function 
function konprobatu($nick) {
	return "BAI";
} 
// create HTTP listener 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA); 
exit();
?>  
