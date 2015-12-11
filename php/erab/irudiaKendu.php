<?php
include_once 'php/konexioa.php';
$izenburua=$_POST['combobox_album'];
$etiketa=$_POST['combobox_argazkiak'];
$nick = $_SESSION['login_nick'];
$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua';";
$result = $dblink->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);
$albumid=$row['ALBUMID'];
$sql="DELETE FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketa'";
$result = $dblink->query($sql);
if($result){
	echo "<p style='color:green'>Ezabatua</p>";
}else{
	echo "<p style='color:red'>Errorea Ezabatzerakoan</p>";
}
include_once "php/deskonexioa.php";
?>