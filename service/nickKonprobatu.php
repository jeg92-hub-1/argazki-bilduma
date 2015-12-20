<?php
require_once ('lib/nusoap.php');

require_once('lib/class.wsdlcache.php'); 
$nick = $_GET['NICK'];

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
 
$erantzuna = "<h3 id='konprobazioa'";
$result1 = $client->call('nickKonprobatu', array('nick'=>$nick));

if(strcmp($result1,"EXISTITZENDA")==0){
		$erantzuna  = $erantzuna  . " style='color:red;'>EXISTITZENDA!!</h3>&G";
		echo $erantzuna;
}else{
	$erantzuna  = $erantzuna  . " style='color:green;'>NICK EGOKIA</h3>&O";
		echo $erantzuna;
}

?>