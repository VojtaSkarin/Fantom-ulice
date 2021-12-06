#!/packages/run/php/bin/php
<?php
include '../pre.php';

$hod = rand(1, 6) + rand(1, 6);
$stesti_ted = $_SESSION['stesti_ted'];

$_SESSION['stesti_ted']--;

if ($hod <= $stesti) {
	header('Location: 354.php');
} else {
	header('Location: 247.php');
}
?>