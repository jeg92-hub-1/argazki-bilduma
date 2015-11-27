<?php
require_once ('lib/nusoap.php');

$pass = $_GET['PASAHITZA'];
$pass1 = $_GET['PASAHITZA1'];

//Web zerbitzariaren URL-a
$wsdl = "http://sw14.hol.es/ServiciosWeb/comprobarcontrasena.php?wsdl";
 
//Erabiltzaile objektua sortzen
$client = new nusoap_client($wsdl, 'wsdl');

//Errorern bat egon den
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<h2>Eraikitzerakoan arazoren bat egon da.</h2>' . $err;
        //exit();
}
 
$erantzuna = "<h1 style='";
$result1=$client->call('comprobar', array('x'=>$pass,'y'=>$pass1));

if(strcmp($result1,"INVALIDA")==0)
	$erantzuna  = $erantzuna  . "color:red;'>Pasahitz errexegia</h1>";
else
	$erantzuna  =  $erantzuna . "color:green;'>ONDO</h1>";

echo $erantzuna;
?>
