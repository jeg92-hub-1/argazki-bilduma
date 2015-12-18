<?php
require_once 'konexioa.php';
require 'lib/myfunctions.php';

$sql="SELECT * FROM ARGAZKIA WHERE ALBUMID>0 AND EGOERA='PUB'";
$result = $dblink->query($sql);
$kont = 1;
echo "<ul id='slider'>";
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
	echo "<li id='".$kont."'>";
		echo '<img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="700" height="350" />';
		echo "<p><span>".$row['ETIKETA']." - ". $row['NICK']."</span></p>";
	echo "</li>";
	$kont = $kont + 1;
}
$sql1="SELECT * FROM ARGAZKIA WHERE ALBUMID=0 AND EGOERA='PUB'";
$result = $dblink->query($sql1);
$row = $result->fetch_array(MYSQLI_BOTH);
echo "<li>";
		echo '<img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="700" height="350" />';
		echo "<p><span>PORTADA</span></p>";
	echo "</li>";

echo "</ul>";
$result = $dblink->query($sql);
$kont = 1;
echo "<ul id='thumb'>";
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
	$testua=$row['NICK'] . '&' . $row['ALBUMID'] . '&' .$row["ETIKETA"];
	$alt=encrypt($testua,'12');
	echo '<li><a href="#'.$kont.'"><img alt="'.$alt.'" onclick="bisitaGehitu(this)" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="50" height="50" /></a></li>';
	$kont = $kont + 1;
		
}
echo "</ul>";

?>