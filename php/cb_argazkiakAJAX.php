<?php
	require 'konexioaAJAX.php';
	session_start();
	$izenburua=$_GET['albumIzenburua'];
	
	$nick = $_SESSION['login_nick'];
	$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='".$nick."' AND IZENBURUA='".$izenburua."';";
	
	echo "<option value='-'>" .'- - - - - - - - - -'."</option>";
		// SQL exekutatu 
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$albumid=$row['ALBUMID'];
	
	$sql="SELECT ETIKETA FROM ARGAZKIA WHERE NICK='".$nick."' AND ALBUMID=".$albumid.";";
	$result = $dblink->query($sql);
	$kont =0;
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		if($kont = 0){
			$kont = $kont + 1;
			echo "<option value='".$row['ETIKETA']."' selected='selected'>".$row['ETIKETA']."</option>";
		}else{
			echo "<option value='".$row['ETIKETA']."'>".$row['ETIKETA']."</option>";
		}
	}
?>