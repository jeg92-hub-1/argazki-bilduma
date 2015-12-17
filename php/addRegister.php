<?php

include_once "konexioa.php";
$nick = $_POST['NICK'];
$izena = $_POST['IZENA'];
$abizenak = $_POST['ABIZENAK'];
$pasahitza = $_POST['PASAHITZA'];
$email = $_POST['EMAIL'];
$sql="INSERT INTO ERABILTZAILEA(NICK,IZENA,ABIZENAK,PASAHITZA,EMAIL,ROLA,ISVALID,ISBLOCK)
		VALUES ('{$nick}','{$izena}','{$abizenak}','{$pasahitza}','{$email}','USER',1,1)";

// SQL exekutatu 
$result = $dblink->query($sql);
 
// Baieztatu ea SQL ondo exekutatu den
if($result) {
	$file=fopen('./file/nick.txt','a') or die("Unable to open file!");
	$txt = $nick . "\n";
	fwrite($file, $txt);
	fclose($file);
	
	$file=fopen('./file/pasahitza.txt','a') or die("Unable to open file!");
	$txt = $pasahitza . "\n";
	fwrite($file, $txt);
	
	fclose($file);
	$file=fopen('./file/email.txt','a') or die("Unable to open file!");
	$txt = $email . "\n";
	fwrite($file, $txt);
	
	fclose($file);
	
	echo "<h1 id='msg' style='color:green'>Dena ondo joan da</h1>";
}

// DB deskonektatzeko
include_once "deskonexioa.php";
?>
