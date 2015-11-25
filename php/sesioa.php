<?php

session_start();

function goikoMenua(){
	if(isset($_SESSION['login_email'])){
		echo "<span class='right' style='display:block;'><a href='php/logout.php'>Logout</a></span>";
	}
	else{
		echo "<span class='right'><a href='login'>Login</a></span> | ";
		echo "<span class='right'><a href='signup'>SignUp</a></span> | ";
		echo "<span class='right'><a href='simplesignup'>SimpleSignUp</a></span>";
	}
}

function mainMenua(){

	echo "<span><a href='./'>Home</a></span> | ";
	echo "<span><a href='credits'>Credits</a></span> | ";
	if(isset($_SESSION['login_email'])){
		if($_SESSION['login_rol']=="ika"){
			echo "<span><a href='seeXMLQuestions'>See XML Questions</a></span> | ";
			echo "<span><a href='quiz'>Quiz</a></span> | ";
			echo "<span><a href='insertquestion'>Insert Question</a></span> | ";
			echo "<span><a href='handlingQuizzes'>Handling Quizzes</a></span>";
		}else{
			echo "<span><a href='erregistroakikusi'>Erregistroak Ikusi</a></span> | ";
			echo "<span><a href='reviewingQuizzes'>Reviewing Quizzes</a></span> | ";
			echo "<span><a href='getUserInform'>Get User Inform</a></span> ";

		}	
	
	}else{
		echo "<span><a href='quiz'>Quiz</a></span>";

	}
}

function ekintza($mota,$dblink){
	$data = "";
	$email = "ANONIMOA";
	$id = "";
	if(isset($_SESSION['login_email'])){
		$email = $_SESSION['login_email'];
		$data = $_SESSION['konexio_data'];
		$sql = "SELECT * FROM KONEXIOA WHERE POSTA='{$email}' AND ORDUA='{$data}';";
		$result = $dblink->query($sql);
		if(!$result){
			echo "Errore bat egon da konexioaren id lortzeko";
		}
		$ema = $result->fetch_array(MYSQLI_BOTH);
		$id=  $ema['ID'];	
	}
	
	$ip = get_bezeroaren_ip();
	$ordua = date('Y/m/d G:i:s');
	
	if($mota == ""){
		$mota = "ikusi";
	}

	$ekintza = "INSERT INTO EKINTZA () VALUES('','$id','$email','$mota','$ordua','$ip');";
	$result = $dblink->query($ekintza);
	if(!$result){
		echo "Ekintzarik ez da gehitu";
	}
	
}

function get_bezeroaren_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;

}

function iralogeatuDa(){
	if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']=="ika"){
		header("Location: ../lab1/"); // Redirecting To Home Page	
	}	
}

function ikalogeatuDa(){
	if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']=="ira"){
		header("Location: ../lab1/"); // Redirecting To Home Page	
	}	
}

?>
