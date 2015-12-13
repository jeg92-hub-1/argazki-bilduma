<?php
require_once 'konexioaAJAX.php';
session_start();

$nick = $_SESSION['login_nick'];
$egoera = $_GET['EGOERA'];
if(strcmp($egoera,'-')!=0){
	$sql="SELECT * FROM ARGAZKIA WHERE NICK='$nick' AND EGOERA='$egoera'";
	$result = $dblink->query($sql);
	$kont = 1;
	echo "<div id='box'>";
	echo "<ul id='slider'>";
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		$albumid=$row['ALBUMID'];
		$sql1="SELECT IZENBURUA FROM ALBUMA WHERE ALBUMID=$albumid AND NICK='$nick'";
		$result1=$dblink->query($sql1);
		$row1= $result1->fetch_array(MYSQLI_BOTH);
		echo "<li id='".$kont."'>";
			echo '<img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="700" height="438" />';
			echo "<p><span>"."ALBUM: ".$row1['IZENBURUA']."; ETIKETA:".$row['ETIKETA']."</span></p>";
		echo "</li>";
		$kont = $kont + 1;
	}
	echo "</ul>";
	$result = $dblink->query($sql);
	$kont = 1;
	echo "<ul id='thumb'>";
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		echo '<li><a href="#'.$kont.'" ><img alt="'.$row["ETIKETA"].'" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="50" height="50" /></a></li>';
		$kont = $kont + 1;
			
	}
	echo "</ul>";
	echo "</div>";
}


?>