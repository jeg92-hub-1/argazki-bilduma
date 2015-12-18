<?php
	include 'konexioaAJAX.php';
	$egoera = $_GET['EGOERA'];
	if(strcmp($egoera,'a')==0){
		$sql="SELECT NICK FROM ERABILTZAILEA WHERE NICK!='default'AND ROLA='USER';";
	}else if(strcmp($egoera,'v')==0){
		$sql="SELECT NICK FROM ERABILTZAILEA WHERE NICK!='default' AND ISVALID=1 AND ROLA='USER';";
	}else if(strcmp($egoera,'b')==0){
		$sql="SELECT NICK FROM ERABILTZAILEA WHERE NICK!='default' AND ISBLOCK=0 AND ROLA='USER';";
	}else if(strcmp($egoera,'ub')==0){
		$sql="SELECT NICK FROM ERABILTZAILEA WHERE NICK!='default' AND ISBLOCK=1 AND ROLA='USER';";
	}

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