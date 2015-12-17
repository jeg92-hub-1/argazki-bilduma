<?php
require_once 'konexioaAJAX.php';


if(isset($_GET['NICK'])){
	$nick = $_GET['NICK'];
}else{
	session_start();
	$nick = $_SESSION['login_nick'];
}

$izenburua=$_GET['IZENBURUA'];
$egoera=$_GET['EGOERA'];

/*Deskribapena eta albumida lortzeko sententzia*/
$sql="SELECT DESKRIBAPENA,ALBUMID FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua'";
$result = $dblink->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);
$deskribapena=$row[0];


/*erakutsi argazki kop eta carousela*/

if(strcmp($egoera,"carouselakin")==0){
	$albumid=$row[1];
	/*Album batean zenbat argazki dauden*/
	$sql1="SELECT COUNT(*) AS KOPURUA FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid'";
	$result = $dblink->query($sql1);
	$row1 = $result->fetch_array(MYSQLI_BOTH);

	$argazkiKop= "Argazki kop:\n";
	$argazkiKop = $argazkiKop . $row1[0];


	if(strcmp($deskribapena,'')==0){
		$erantzuna = "Ez dago deskribapenik";
	}else{
		$erantzuna = $deskribapena ."\n\n" . $argazkiKop;
	}


	$sql1="SELECT * FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid';";
	$result = $dblink->query($sql1);

	/*Album argazkiak carousel baten bidez erakutsi*/
	$carousel='<div id="box">';
	$kont = 1;
	$carousel= $carousel . "<ul id='slider'>";
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		$carousel = $carousel . "<li id='".$kont."'>";
			$carousel = $carousel .  '<img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="700" height="350" />';
			$carousel = $carousel .  "<p><span>".$row['ETIKETA']." </span></p>";
		$carousel = $carousel .  "</li>";
		$kont = $kont + 1;
	}
	$carousel=$carousel."</ul>";

	$result = $dblink->query($sql1);
	$kont = 1;
	$carousel = $carousel. "<ul id='thumb'>";
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		$carousel = $carousel. '<li><a href="#'.$kont.'"><img alt="'.$row["ETIKETA"].'"  src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="50" height="50" /></a></li>';
		$kont = $kont + 1;
			
	}
	$carousel = $carousel. "</ul>";
	$carousel=$carousel."</div>";

	$erantzuna = $erantzuna . '&&&' . $carousel;
	echo $erantzuna;
}else{
	echo $deskribapena;
}
?>