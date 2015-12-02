<?php
require_once 'konexioa.php';
$sql="SELECT * FROM ARGAZKIA WHERE EGOERA='PRI'";
$result = $dblink->query($sql);
$kont = 1;
echo "<ul id='slider'>";
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
	echo "<li id='".$kont."'>";
		echo '<img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="700" height="438" />';
		echo "<p><span>".$row['ETIKETA']." - ". $row['NICK']."</span></p>";
	echo "</li>";
	$kont = $kont + 1;
}
echo "</ul>";
$result = $dblink->query($sql);
$kont = 1;
echo "<ul id='thumb'>";
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
	echo '<li><a href="#'.$kont.'"><img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="50" height="50" /></a></li>';
	$kont = $kont + 1;
		
}
echo "</ul>";

?>