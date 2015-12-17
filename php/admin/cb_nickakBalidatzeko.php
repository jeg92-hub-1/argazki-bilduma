<?php
	require_once ('./php/konexioa.php');
	$nick = $_SESSION['login_nick'];
	$sql="SELECT NICK FROM ERABILTZAILEA WHERE ISVALID=0;";
	
	$result = $dblink->query($sql);
	$kont =0;
	echo "<option value='-'>".'- - - - -'."</option>";
		
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		if($kont = 0){
			$kont = $kont + 1;
			echo "<option value='".$row['NICK']."' selected='selected'>".$row['NICK']."</option>";
		}else{
			echo "<option value='".$row['NICK']."'>".$row['NICK']."</option>";
		
		}
	}
	
?>