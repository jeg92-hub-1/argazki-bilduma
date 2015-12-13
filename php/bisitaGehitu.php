<?php

require_once 'konexioaAJAX.php';
session_start();
$nick = $_SESSION['login_nick'];
$etiketa = $_GET['ETIKETA'];

echo $nick . $etiketa;
?>
