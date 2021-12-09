<?php
include 'pre.php';
include 'map.php';

$hod = rand(1, 6) + rand(1, 6);
$stesti_ted = $_SESSION['stesti_ted'];

$_SESSION['stesti_ted'] = max($_SESSION['stesti_ted'] - 1, 0);

$_SESSION['stesti'] = $hod <= $stesti_ted;
$_SESSION['stav'] = 'fortune-post';

header('Location: game.php');
?>