<?php
	require_once ('./php/konexioa.php');
	$nick = $_SESSION['login_nick'];
	$sql="SELECT * FROM ALBUMA WHERE NICK='" . $nick . "';";
	
	$result = $dblink->query($sql);
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {
		echo "<div class='item'>";
			echo "<div class='key caption'>" . $row['IZENBURUA'] ."</div>";
			echo "<div id='icon'>";
				echo "<img alt='Profile' width='22' height='22' src='./images/id.png' />";
			echo "</div>";
			echo "<div class='description'>" . $row['DESKRIBAPENA'] ."</div>";
		echo "</div>";
	}
	
	
?>