<?php
require_once ('lib/nusoap.php');

require_once('lib/class.wsdlcache.php'); 
$email = $_GET['EMAIL'];

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
$result1 = $client->call('emailKonprobatu', array('email'=>$email));

if(strcmp($result1,"EXISTITZENDA")==0){
		$erantzuna  = $erantzuna  . " style='color:red;'>ERABILITA!!</h3>&G";
		echo $erantzuna;
}else{
	$erantzuna  = $erantzuna  . " style='color:green;'>EMAIL EGOKIA</h3>&O";
		echo $erantzuna;
}

?>