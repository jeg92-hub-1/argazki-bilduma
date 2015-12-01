<?php
	require_once ('./php/konexioa.php');
	$nick = $_SESSION['login_nick'];
	$sql="SELECT * FROM ALBUMA WHERE NICK='" . $nick . "';";
	
	$result = $dblink->query($sql);
	$kont =0;
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		if($kont = 0){
			$kont = $kont + 1;
			echo "<option value='".$row['IZENBURUA']."' selected='selected'>".$row['IZENBURUA']."</option>";
		}else{
			echo "<option value='".$row['IZENBURUA']."'>".$row['IZENBURUA']."</option>";
		
		}

	}
	
?>