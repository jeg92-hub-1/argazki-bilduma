<?php
require_once 'konexioa.php';
$nick=$_SESSION['login_nick'];
$sql="SELECT * FROM ARGAZKIA WHERE NICK='$nick' AND EGOERA='MUG'";
$result = $dblink->query($sql);
$kont = 1;
echo "<ul id='slider'>";
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
	echo "<li id='".$kont."'>";
		echo '<img alt="default" src="data:image/jpeg;base64,' . base64_encode($row['IMG']) . '" width="700" height="438" />';
		$albumid=$row['ALBUMID'];
		$sql1="SELECT IZENBURUA FROM ALBUMA WHERE ALBUMID=$albumid AND NICK='$nick'";
		$result1=$dblink->query($sql1);
		$row1= $result1->fetch_array(MYSQLI_BOTH);
		echo "<p><span>". $row1['IZENBURUA'] ." - ". $row['ETIKETA']." - ". $row['NICK']."</span></p>";
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