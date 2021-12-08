<?php
session_start();

include 'content/pre.php';

$mapa = [
	'new-game' => ['intro'],
	'intro' => ['intro-2'],
	'intro-2' => ['intro-3'],
	'intro-3' => ['1'],
	'1' => ['126', '34'],
	'2' => ['2-post'],
	'2-post' => ['13'],
	'3' => ['3-post'],
	'3-post' => ['354', '247'],
	'4' => ['4-post'],
	'4-post' => ['254'],
	'5' => ['241', '218'],
	'6' => ['307'],
	'7' => ['319', '136'],
	'8' => ['340'],
	'9' => ['9-post'],
	'9-post' => ['smrt'],
	'10' => ['264', '359'],
];

if (array_key_exists('new-game', $_GET)) {
	$_SESSION['stav'] = 'new-game';
	header('Location: game.php');
} else if (array_key_exists('action', $_GET)) {
	$_SESSION['stav'] = $mapa[$_SESSION['stav']][intval($_GET['action']) - 1];
	header('Location: game.php');
} else {
	include 'content/' . $_SESSION['stav'] . '.php';
}
?>

<title>
Fantom ulice
</title>