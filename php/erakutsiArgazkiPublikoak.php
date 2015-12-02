<?php
require_once 'konexioa.php';
$sql="SELECT * FROM ARGAZKIA WHERE EGOERA='PUB'";
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

/*

<ul id="thumb">
	<li><a href="#1"><img src="images/image1.jpg" alt="grass-blades" width="50" height="50" /></a></li>
	<li><a href="#2"><img src="images/image1.jpg" alt="ladybug" width="50" height="50" /></a></li>
	<li><a href="#3"><img src="images/image1.jpg" alt="lotus" width="50" height="50" /></a></li>
	<li><a href="#4"><img src="images/image1.jpg" alt="stones" width="50" height="50" /></a></li>

</ul>*/
?>