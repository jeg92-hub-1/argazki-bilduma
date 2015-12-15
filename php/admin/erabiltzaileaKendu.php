<?php
include_once 'php/konexioa.php';

$sql="DELETE FROM ERABILTZAILEA WHERE NICK='$nick'";
$result = $dblink->query($sql);
if($result){
	echo "<p id='mezua' style='color:green'>Ezabatua</p>";
}else{
	echo "<p id='mezua' style='color:red'>Errorea Ezabatzerakoan</p>";
}
include_once "php/deskonexioa.php";
?>