<?php
require_once 'konexioaAJAX.php';

$nick=$_GET['NICK'];

/*Deskribapena eta albumida lortzeko sententzia*/
$sql="SELECT * FROM ERABILTZAILEA WHERE NICK='$nick';";
$result = $dblink->query($sql);
if($result){
	$row = $result->fetch_array(MYSQLI_BOTH);
	$nick=$row[0];
	$pasahitza=$row[1];
	$izena=$row[2];
	$abizenak=$row[3];
	$email=$row[4];
	$erantzuna = $nick . "&" . $pasahitza . "&" . $izena . "&" .$abizenak . "&" . $email;
	echo $erantzuna;
}

?>