<?php
	include 'konexioaAJAX.php';
	session_start();
	$nick=$_SESSION['login_nick'];
	$sql="SELECT * FROM ERABILTZAILEA WHERE NICK='$nick'";
	$result=$dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$profila = $row['NICK'].";".$row['PASAHITZA'].";".$row['IZENA'].";".$row['ABIZENAK'].";".$row['EMAIL'].";";
	echo $profila;
?>