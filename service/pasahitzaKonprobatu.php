<?php
require ('lib/nusoap.php');
require_once('lib/class.wsdlcache.php'); 

$pass = $_GET['PASAHITZA'];

//Web zerbitzariaren URL-a
$wsdl = "http://localhost:8080/argazki-bilduma/service/myserver.php";
//Erabiltzaile objektua sortzen
$client = new nusoap_client($wsdl, false);

//Errorern bat egon den
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<h2>Eraikitzerakoan arazoren bat egon da.</h2>' . $err;
}
 
$erantzuna = "<h3 style='";
$result1 = $client->call('errexegiaPasahitzaDa', array('pasashitza'=>$pass));

if(strcmp($result1,"ERREXEGIA")==0)
	$erantzuna  = $erantzuna  . "color:red;'>Pasahitz errexegia</h3>&G";
else{
	$result1 = $client->call('pasahitzaKonprobatu', array('pass'=>$pass));
	if(strcmp($result1,"ERABILITA")==0)
		$erantzuna  =  $erantzuna . "color:red;'>Ez da segurua</h3>&G";
	else
		$erantzuna  =  $erantzuna . "color:green;'>EGOKIA</h3>&O";
}


echo $erantzuna;
?>
