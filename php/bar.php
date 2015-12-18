<html>
<head>
  <!-- Plotly.js -->
</head>

<body>
  
  <div id="myDiv" style="width: 480px; height: 400px;"><!-- Plotly chart will be drawn inside this DIV --></div>
  <?php
	include 'konexioaAJAX.php';
	session_start();
	$nick = $_SESSION['login_nick'];
	$izenburua = $_POST['izenburua'];
	$x1=$y1=$y2="";
	if(strcmp($izenburua,"-")!=0){
		$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua'";
		$result = $dblink->query($sql);
		$row = $result->fetch_array(MYSQLI_BOTH);
		$albumid=$row[0];
		$sql="SELECT * FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid' AND EGOERA='PUB';";
		$result = $dblink->query($sql);
		$x1=array();
		$y1=array();
		$x2=array();
		$y2=array();
		while($row = $result->fetch_array(MYSQLI_BOTH)){
			array_push($x1,$row['ETIKETA']);
			array_push($y1,$row['VISITUSER']);
			array_push($x2,$row['ETIKETA']);
			array_push($y2,$row['VISITNOUSER']);
		}
		$x1="'".implode("','",$x1)."'";
		$y1=implode(",",$y1);
		$y2=implode(",",$y2);
	}	
  ?>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script>
    var trace1 = {
  x: [<?php echo $x1;?>], 
  y: [<?php echo $y1;?>], 
  name: 'USERS', 
  type: 'bar'
};

var trace2 = {
  x: [<?php echo $x1;?>], 
  y: [<?php echo $y2;?>], 
  name: 'NOTUSERS', 
  type: 'bar'
};

var data = [trace1, trace2];

var layout = {barmode: 'group'};

Plotly.newPlot('myDiv', data, layout);
  </script>
  
</body>
</html>