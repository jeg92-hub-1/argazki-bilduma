<?php
include_once 'php/konexioa.php';
$nick = $_POST['NICK'];
$sql="SELECT * FROM ERABILTZAILEA WHERE NICK='$nick'";
$result = $dblink->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);
$pasahitza=$row['PASAHITZA'];
$email=$row['EMAIL'];

$sql="DELETE FROM ERABILTZAILEA WHERE NICK='$nick'";
$result = $dblink->query($sql);
if($result){
	//Erabiltzaile horrek zuen nicka fitxategitik kendu
	$fname = "./file/nick.txt"; 
	$lines = file($fname); 
	$out="";
	foreach($lines as $line) { 
		if(!strstr($line, $nick))
			$out .= $line; 
	} 
	$f = fopen($fname, "w"); 
	fwrite($f, $out); 
	fclose($f);
	
	//Erabiltzaile horrek zuen pasahitza fitxategitik kendu
	$fname = "./file/pasahitza.txt"; 
	$lines = file($fname); 
	$out="";
	foreach($lines as $line) { 
		if(!strstr($line, $pasahitza))
			$out .= $line; 
	} 
	$f = fopen($fname, "w"); 
	fwrite($f, $out); 
	fclose($f);
	
	//Erabiltzaile horrek zuen emaila fitxategitik kendu
	$fname = "./file/email.txt"; 
	$lines = file($fname); 
	$out="";
	foreach($lines as $line) { 
		if(!strstr($line, $email))
			$out .= $line; 
	} 
	$f = fopen($fname, "w"); 
	fwrite($f, $out); 
	fclose($f);
	
	echo "<p id='mezua' style='color:green'>Ezabatua</p>";
}else{
	echo "<p id='mezua' style='color:red'>Errorea Ezabatzerakoan</p>";
}
include_once "php/deskonexioa.php";
?>