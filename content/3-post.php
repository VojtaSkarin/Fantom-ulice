<?php
include 'pre.php';

$hod = rand(1, 6) + rand(1, 6);
$stesti_ted = $_SESSION['stesti_ted'];

$_SESSION['stesti_ted']--;

if ($hod <= $stesti) {
	header('Location: content/next.php?stav=content/354.php');
} else {
	header('Location: content/next.php?stav=content/247.php');
}
?>