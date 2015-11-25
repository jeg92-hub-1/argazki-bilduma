<?php
require_once ('lib/nusoap.php');

$nick = $_GET['NICK'];

//Web zerbitzariaren URL-a
//$wsdl = "http://azkenpraktika.hol.es/argazkiBilduma/sevice/myservice.php";
$wsdl = "http://localhost:80/argazkiBilduma/service/myserver.php";
//Erabiltzaile objektua sortzen
$client = new nusoap_client($wsdl, 'wsdl');

//Errorern bat egon den
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<h2>Eraikitzerakoan arazoren bat egon da.</h2>' . $err;
        //exit();
}
 
$erantzuna = "<p";
$result1=$client->call('nickKonprobatu', array('nick'=>$nick ));
if(strcmp($result1,"BAI")==0){
		$erantzuna  = $erantzuna  . "color:red;'>EXISTITZENDA!!</p>";
		echo $erantzuna;
}

?>