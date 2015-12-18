<?php
require 'lib/myfunctions.php';
require_once 'konexioaAJAX.php';
session_start();
if(isset($_SESSION['login_nick'])){
	$isUser = true;
}else{
	$isUser= false;
}
$infoEnkriptatua = $_GET['INFO'];
$infoDesenkriptatua = decrypt($infoEnkriptatua, '12');

list($nick, $albumid, $etiketa) = split('&', $infoDesenkriptatua);

if($isUser){
	$sql = "UPDATE ARGAZKIA SET VISITUSER=VISITUSER+1 WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketa'";
}else{
	$sql = "UPDATE ARGAZKIA SET VISITNOUSER=VISITNOUSER+1 WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketa'";
}
$result = $dblink->query($sql);

if(!$result){
	echo "Arazoak";
}
?>
