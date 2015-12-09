<?php
require_once ('lib/nusoap.php');

require_once('lib/class.wsdlcache.php'); 
$nick = $_GET['NICK'];

//Web zerbitzariaren URL-a
$wsdl = "http://localhost:8080/argazkiBilduma/service/myserver.php";
//Erabiltzaile objektua sortzen
$client = new nusoap_client($wsdl, false);

//Errorern bat egon den
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<h2>Eraikitzerakoan arazoren bat egon da.</h2>' . $err;
}
 
$erantzuna = "<h3";
$result1 = $client->call('konprobatu', array('nick'=>$nick));

if(strcmp($result1,"BAI")==0){
		$erantzuna  = $erantzuna  . " style='color:red;'>EXISTITZENDA!!</h3>";
		echo $erantzuna;
}

?>