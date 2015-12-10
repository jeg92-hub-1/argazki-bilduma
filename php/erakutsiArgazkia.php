<?php

require_once 'konexioaAJAX.php';
session_start();
$nick = $_SESSION['login_nick'];
$izenburua = $_GET['albumIzenburua'];
$etiketa = $_GET['etiketa'];

$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua'";
$result = $dblink->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);
$albumid =$row[0];
$sql="SELECT * FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketa'";
$result = $dblink->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);
echo "<img id='thumbnil' src='data:image/jpeg;base64," .base64_encode($row['IMG'])."' />";

?>